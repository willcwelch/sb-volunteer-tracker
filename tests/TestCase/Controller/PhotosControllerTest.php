<?php
namespace App\Test\TestCase\Controller;

use App\Controller\PhotosController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\PhotosController Test Case
 */
class PhotosControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.photos',
        'app.events',
        'app.projects',
        'app.organizations',
        'app.affiliations',
        'app.affiliations_organizations',
        'app.users',
        'app.organizations_users',
        'app.types',
        'app.projects_types'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
