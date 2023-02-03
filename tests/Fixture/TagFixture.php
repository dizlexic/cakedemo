<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TagFixture
 */
class TagFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tag';
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
                'title' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-02-03 14:49:30',
                'modified' => '2023-02-03 14:49:30',
            ],
        ];
        parent::init();
    }
}
