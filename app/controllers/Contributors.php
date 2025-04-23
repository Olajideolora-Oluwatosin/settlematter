<?php
class Contributors extends Controller
{

    private $pollModel;

    public function __construct()
    {
        $this->pollModel = $this->model('Poll');
    }

    public function index()
    {
        $page = isset($_GET['page']) && is_numeric($_GET['page']) && $_GET['page'] > 0
            ? (int)$_GET['page']
            : 1;

        $limit = 20; // Number of items per page
        $offset = ($page - 1) * $limit;

        $points = $this->pollModel->getPointSetting();
        $topVoters = $this->pollModel->getUsersByVoteCountWithPagination($limit, $offset);
        $totalVoters = $this->pollModel->getTotalVoterCount()->total; 
        
        $totalPages = ceil($totalVoters / $limit);
        // Load View
        $this->view('contributors', [
            'points' => $points,
            'topVoters' => $topVoters,
            'page' => $page, // optional, but helpful for pagination links
            'totalPages' => $totalPages 
        ]);
    }
}