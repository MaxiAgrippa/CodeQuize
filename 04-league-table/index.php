<?php

class LeagueTable
{
	public function __construct(array $players)
	{
		$this->standings = [];
		$this->players = $players;
		foreach ($players as $index => $p) {
			$this->standings[$p] = [
				'index'        => $index,
				'games_played' => 0,
				'score'        => 0
			];
		}
	}

	public function recordResult($player, $score)
	{
		$this->standings[$player]['games_played']++;
		$this->standings[$player]['score'] += $score;
	}

	public function playerRank($rank)
	{
		$nrank = usort($this->standings, function ($player1, $player2) {
			if ($player1['score'] > $player2['score']) {
				return -1;
			} elseif ($player1['score'] < $player2['score']) {
				return 1;
			}
			if ($player1['games_played'] > $player2['games_played']) {
				return 1;
			} elseif ($player1['games_played'] < $player2['games_played']) {
				return -1;
			}
			if ($player1['index'] < $player2['index']) {
				return -1;
			} else {
				return 1;
			}
		});
		return $this->players[$this->standings[($rank - 1)]['index']];
	}
}

$table = new LeagueTable(array('Mike', 'Chris', 'Arnold'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
echo $table->playerRank(1);
