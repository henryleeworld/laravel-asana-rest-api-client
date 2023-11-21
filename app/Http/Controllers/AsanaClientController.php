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
        $this->client = Client::accessToken(config('services.asana.access_token'), ['headers' => ['asana-disable' => 'new_goal_memberships']]);
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
        $project = $this->client->projects->createProjectForWorkspace($workspaceGid, ['name' => __('Project')]);
        echo "建立專案的識別編號：" . $project->gid . PHP_EOL;
    }
}
