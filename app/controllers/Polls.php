<?php
class Polls extends Controller
{

    private $pollModel;

    public function __construct()
    {
        $this->pollModel = $this->model('Poll');
    }
    public function index()
    {
        $userid = $_SESSION[SESSION_USER_KEY] ?? null;
        $polls = $this->pollModel->getAllPolls($userid);
        // Load View
        $this->view('polls/index', [
            'polls' => $polls
        ]);
    }
}