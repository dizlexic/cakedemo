<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GalleryFixture
 */
class GalleryFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'gallery';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'slug' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-02-03 17:13:36',
                'modified' => '2023-02-03 17:13:36',
            ],
        ];
        parent::init();
    }
}
