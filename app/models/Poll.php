<?php


class Poll
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPolls($userId)
{
    $this->db->query("
        SELECT 
            p.id AS poll_id,
            p.question,
            pa.id AS answer_id,
            pa.answer AS answer_text,
            pv.user_id AS voted_user
        FROM 
            poll p
        LEFT JOIN 
            pollanswer pa ON p.id = pa.pollId
        LEFT JOIN 
            pollvotes pv ON pv.poll_id = p.id AND pv.user_id = :userId
    ");

    $this->db->bind(':userId', $userId);
    $rows = $this->db->resultSet();

    // Group answers under each poll
    $polls = [];

    foreach ($rows as $row) {
        $pollId = $row->poll_id;

        if (!isset($polls[$pollId])) {
            $polls[$pollId] = [
                'id' => $pollId,
                'question' => $row->question,
                'hasVoted' => $row->voted_user !== null,
                'answers' => []
            ];
        }

        if ($row->answer_id) {
            $polls[$pollId]['answers'][] = [
                'id' => $row->answer_id,
                'text' => $row->answer_text
            ];
        }
    }

    return array_values($polls);
}
    
    public function getFeaturedPolls()
    {
        $this->db->query("SELECT p.id AS poll_id, p.question, pa.id AS answer_id, pa.answer AS answer_text FROM poll p LEFT JOIN pollanswer pa ON p.id = pa.pollId WHERE p.featured = 1");

        $rows = $this->db->resultSet();

        // Group answers under each poll
        $polls = [];

        foreach ($rows as $row) {
            $pollId = $row->poll_id;

            if (!isset($polls[$pollId])) {
                $polls[$pollId] = [
                    'id' => $pollId,
                    'question' => $row->question,
                    'answers' => []
                ];
            }

            if ($row->answer_id) {
                $polls[$pollId]['answers'][] = [
                    'id' => $row->answer_id,
                    'text' => $row->answer_text
                ];
            }
        }

        return array_values($polls);
    }
    public function getLoggedInFeaturedPolls($userId)
{
    $this->db->query("
        SELECT 
            p.id AS poll_id,
            p.question,
            pa.id AS answer_id,
            pa.answer AS answer_text,
            pv.user_id AS voted_user
        FROM 
            poll p
        LEFT JOIN 
            pollanswer pa ON p.id = pa.pollId
        LEFT JOIN 
            pollVotes pv ON pv.poll_id = p.id AND pv.user_id = :userId
        WHERE 
            p.featured = 1
    ");

    $this->db->bind(':userId', $userId);
    $rows = $this->db->resultSet();

    // Group answers under each poll
    $polls = [];

    foreach ($rows as $row) {
        $pollId = $row->poll_id;

        if (!isset($polls[$pollId])) {
            $polls[$pollId] = [
                'id' => $pollId,
                'question' => $row->question,
                'hasVoted' => $row->voted_user !== null,
                'answers' => []
            ];
        }

        if ($row->answer_id) {
            $polls[$pollId]['answers'][] = [
                'id' => $row->answer_id,
                'text' => $row->answer_text
            ];
        }
    }

    return array_values($polls);
}

    public function hasUserVoted($pollId, $userId)
    {
        $this->db->query("SELECT * FROM pollVotes WHERE poll_id = :pollId AND user_id = :userId");
        $this->db->bind(':pollId', $pollId);
        $this->db->bind(':userId', $userId);
        return $this->db->single(); // returns false if no vote found
    }
    public function saveVote($pollId, $answerId, $userId)
    {
        $this->db->query("INSERT INTO pollVotes (poll_id, answer_id, user_id) VALUES (:pollId, :answerId, :userId)");
        $this->db->bind(':pollId', $pollId);
        $this->db->bind(':answerId', $answerId);
        $this->db->bind(':userId', $userId);
        return $this->db->execute();
    }
}