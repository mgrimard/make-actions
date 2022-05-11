<?php

namespace Mgrimard\MakeActions\Tests\Unit;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Mgrimard\MakeActions\Tests\TestCase;

class MakeActionCommandTest extends TestCase
{
    function test_it_creates_a_new_action_class()
    {
        $actionClass = app_path('Actions/TestAction.php');

        if (File::exists($actionClass)) {
            unlink($actionClass);
        }

        $this->assertFalse(File::exists($actionClass));

        Artisan::call('make:action TestAction');

        $this->assertTrue(File::exists($actionClass));

        $expectedContents = <<<CLASS
<?php

namespace App\Actions;

class TestAction
{
    /**
     * Create the action.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the action.
     *
     * @return void
     */
    public function execute()
    {
        //
    }
}
CLASS;

        $this->assertEquals($expectedContents, file_get_contents($actionClass));
    }
}