<?php

/**
 * @author Artur Szulc s24260 <s24260@pjwstk.edu.pl>
 * @author Mateusz Kopczyński s24261 <s24261@pjwstk.edu.pl>
 */
class Task_3_5
{
    const BOARD_SIZE = 3;

    private array $board = [];
    private bool $isWin;
    private string $sign;

    public function __construct()
    {
        $this->initBoard();
        $this->isWin = true;
        $this->sign = 'o';
    }

    public function tickTacToe(): void
    {
        while (true) {
            $this->showBoard();
            [$row, $column] = $this->readBoardCoordinate();

            if (!empty($this->board[$row][$column])) {
                echo "You cannot fill already filled field! \n";
                continue;
            }

            $this->board[$row][$column] = $this->sign;

            if ($this->isGameFinished()) break;

            if ($this->isAnyEmptyField()) {
                $this->isWin = false;
                break;
            }

            $this->changeSign();
        }

        $this->showMessage();
        $this->showBoard();
    }

    private function initBoard(): void
    {
        for ($i = 0; $i < self::BOARD_SIZE; $i++) {
            for ($j = 0; $j < self::BOARD_SIZE; $j++) {
                $this->board[$i][$j] = "";
            }
        }
    }

    private function showBoard(): void
    {
        for ($i = 0; $i < self::BOARD_SIZE; $i++) {
            $string = "";

            for ($j = 0; $j < self::BOARD_SIZE; $j++) {
                $value = !empty($this->board[$i][$j])
                    ? $this->board[$i][$j]
                    : '_';

                $string .= "[ $value ]";
            }

            echo $string . "\n";
        }
    }

    private function readBoardCoordinate(): array
    {
        echo "Your sign is '$this->sign' \n";
        $row = (int)readline("Get row: ");
        $column = (int)readline("Get column: ");

        if ($row > 2 || $row < 0 || $column > 2 || $column < 0) {
            return $this->readBoardCoordinate();
        }

        return [$row, $column];
    }

    private function isGameFinished(): bool
    {
        return $this->isSameInRow($this->board)
            || $this->isSameInColumn()
            || $this->isSameInDiagonal();
    }


    private function isSameInRow($array): bool
    {
        $isSameInRow = false;

        for ($i = 0; $i < self::BOARD_SIZE; $i++) {
            if (!empty($array[$i])) {
                if (count(array_unique($array[$i])) == 1 && !empty($array[$i][0])) {
                    $isSameInRow = true;
                }
            }
        }

        return $isSameInRow;
    }

    private function isSameInColumn(): bool
    {
        return $this->isSameInRow($this->transpose($this->board));
    }

    private function isSameInDiagonal(): bool
    {
        $array = [
            [$this->board[0][0], $this->board[1][1], $this->board[2][2]],
            [$this->board[0][2], $this->board[1][1], $this->board[2][0]],
        ];

        return $this->isSameInRow($array);
    }

    private function transpose($array): array
    {
        array_unshift($array, null);
        return call_user_func_array('array_map', $array);
    }

    private function isAnyEmptyField(): bool
    {
        $isAnyEmptyField = true;

        for ($i = 0; $i < self::BOARD_SIZE; $i++) {
            for ($j = 0; $j < self::BOARD_SIZE; $j++) {
                if (empty($this->board[$i][$j])) {
                    $isAnyEmptyField = false;
                    break;
                }
            }
        }

        return $isAnyEmptyField;
    }

    private function showMessage(): void
    {
        echo $this->isWin
            ? "Win '$this->sign' ! \n"
            : "Draw!";
    }

    private function changeSign(): void
    {
        $this->sign = $this->sign === 'x'
            ? 'o'
            : 'x';
    }
}

$game = new Task_3_5();
$game->tickTacToe();