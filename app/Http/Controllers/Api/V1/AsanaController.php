<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Asana\Client;

/**
 * @group Auth endpoints
 */
class AsanaController extends Controller
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
        $workspaceGid = $me->workspaces[0]->gid;
        $project = $this->client->projects->createProjectForWorkspace($workspaceGid, ['name' => __('Project')]);
        return response()->json([
            'name' => $me->name,
            'project_id' => $project->gid,
        ]);
    }
}