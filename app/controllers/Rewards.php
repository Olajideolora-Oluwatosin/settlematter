<?php
class Rewards extends Controller{
    

    private $pollModel;

public function __construct()
{
    $this->pollModel = $this->model('Poll');
}

    public function index(){
        $userid = $_SESSION[SESSION_USER_KEY] ?? null;
        $points = $this->pollModel->getPointSetting()->points;
        $pointss = $this->pollModel->getPointSetting();
        $userTotalVote = $this->pollModel->getUserTotalPoints($userid)*$points;
        $topVoters = $this->pollModel->getUsersByVoteCount();
        
     
          // Load View
          $this->view('reward/index', [
            'pointsuserTotalVote' => $userTotalVote, 
            'topVoters' => $topVoters,
            'points' => $pointss,
            ]);

    }

}