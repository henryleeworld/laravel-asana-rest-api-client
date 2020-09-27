<?php

namespace App\Http\Controllers;

use Asana\Client;

class AsanaClientController extends Controller
{
    /**
     * The client repository instance.
     */
    protected $client;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = Client::accessToken(env('ASANA_PERSONAL_ACCESS_TOKEN'));
    }

    /**
     * Show.
     *
     * @return void
     */
    public function show()
    {
        $me = $this->client->users->getUser("me");
        echo '使用者名稱：' . $me->name . PHP_EOL;
        $workspaceGid = $me->workspaces[0]->gid;
        $project = $this->client->projects->createProjectForWorkspace($workspaceGid, array('name' => '專案'));
        echo "建立專案的識別編號：" . $project->gid . PHP_EOL;
    }
}
