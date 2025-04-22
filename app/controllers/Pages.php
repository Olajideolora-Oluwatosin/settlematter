<?php
class Pages extends Controller
{

    private $pollModel;

    public function __construct()
    {
        $this->pollModel = $this->model('Poll');
    }

    public function index()
    {
       $userid = $_SESSION[SESSION_USER_KEY] ?? null;
        $featuredPolls = $this->pollModel->getLoggedInFeaturedPolls($userid);
        // Load View
        $this->view('home', [
            'featuredPolls' => $featuredPolls
        ]);
    }

    public function voting()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $data = [
                'pollId' => trim($_POST['pollId'] ?? null),
                'answerId' => trim($_POST['answerId'] ?? null),
                'userId' => $_SESSION[SESSION_USER_KEY] ?? null,
            ];

            if (!$data['pollId'] || !$data['answerId'] || !$data['userId']) {
                http_response_code(400);
                echo json_encode(['message' => 'Invalid vote.']);
                return;
            }
         
            // Check if user already voted
           if ($this->pollModel->hasUserVoted($data['pollId'], $data['userId'])) {
               http_response_code(409); // Conflict
                echo json_encode(['message' => 'You have already voted on this poll.']);
                return;
            }

            // Save vote
             $this->pollModel->saveVote($data['pollId'] , $data['answerId'], $data['userId']);
             header('Content-Type: application/json');
             echo json_encode(['message' => 'Thank you for voting!']);
             return;
        }else{
            http_response_code(405);
            echo json_encode(['message' => 'Method not allowed']);
        }

       
    }


    public function faq()
    {


        // Load View
        $this->view('faq');
    }
}