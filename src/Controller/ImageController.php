<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Core\Configure;

/**
 * Image Controller
 *
 * @property \App\Model\Table\ImageTable $Image
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImageController extends AppController
{

    public $upload_path = WWW_ROOT . 'uploads/';
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */


    public function index()
    {
        $image = $this->paginate($this->Image);
        $this->set(compact('image'));
    }

    /**
     * View method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $image = $this->Image->get($id, [
            'contain' => ['Gallery'],
        ]);

        $this->set(compact('image'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $image = $this->Image->newEmptyEntity();
        if ($this->request->is('post')) {

            $patched = $this->Image->customPatchData($image, $this->request->getData());
            $image = $this->Image->patchEntity($patched['entity'], $patched['data']);

            if ($this->Image->save($image)) {
                if($this->_saveFile($image, $patched['data']['attachment'])) {
                    $this->Flash->success(__('The image has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->Flash->error(__('The image could not be saved. Please, try again.'));
        }
        $gallery = $this->Image->Gallery->find('list', ['limit' => 200])->all();
        $this->set(compact('image', 'gallery'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $image = $this->Image->get($id, [
            'contain' => ['Gallery'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $image = $this->Image->patchEntity($image, $this->request->getData());
            if ($this->Image->save($image)) {
                $this->Flash->success(__('The image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('The image could not be saved. Please, try again.'));
        }
        $gallery = $this->Image->Gallery->find('list', ['limit' => 200])->all();
        $this->set(compact('image', 'gallery'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $image = $this->Image->get($id);
        if ($this->Image->delete($image))
        {
            if(file_exists($this->upload_path . $image->file))
            {
                unlink(WWW_ROOT . 'uploads/'.$image->file);
            }

            $this->Flash->success(__('The image has been deleted.'));
        }
        else
        {
            $this->Flash->error(__('The image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    /**
     * sendFile method
     *
     * @param string|null $slug Image slug.
     * @return \Cake\Http\Response
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     *
     * I got distracted playing with custom routes
     */
    public function sendFile($slug = null)
    {
        $this->request->allowMethod(['get']);
        $image = $this->Image->findBySlug($slug)->firstOrFail();
        $path = $this->upload_path . $image->file;
        $response = $this->response->withFile($path)->withType($image->type);
        return $response;
    }

    /**
     * sendFile method
     *
     * @param Cake\ORM\Entity\Image| $image unused - future to rename image upload if exists
     * @param Psr\Http\Message\UploadedFileInterface| $file
     *
     * I got distracted playing with custom routes
     */
    protected function _saveFile($image, $file) {
        $config = Configure::read('App');
        $path = WWW_ROOT . $config['uploadBaseDir'] . $file->getClientFilename();
        $file->moveTo($path);
        return true;
    }
}
