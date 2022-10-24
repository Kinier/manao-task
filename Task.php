<?php


class Task
{
    public int $n;
    public int $m;
    public string $mass;
    protected array $used;
    protected string $res = '';
    public int $count = 0;

    /**
     * @throws Exception
     */
    public function __construct($m, $mass)
    {
        if ($m > strlen($mass))
            throw new Exception("m не должно быть выше количества значений строки");

        if ($m < 1) {
            throw new Exception("Число повыше");
        }
        if (strlen($mass) < 2) {
            throw new Exception("Сишком мелкая строка отправлена");
        }
        $this->m = $m;
        $this->n = strlen($mass);
        $this->used = array_fill(0, $this->n, false);
        $this->mass = $mass;
    }

    public function counter()
    {
        $factoria = 1;
        $factorib = 1;
        for ($i = 1; $i <= $this->n; $i++) {
            $factoria *= $i;
            if ($this->n - $this->m === $i)
                $factorib = $factoria;
        }

        echo $factoria / $factorib;
    }

    /**
     * @throws Exception
     */
    public function replace($pos)
    {
        if ($pos < 0 or $pos > $this->n)
            throw new Exception("позиция неправильно определена");
        if ($pos === $this->m) {
            echo ($this->res) . PHP_EOL;
            $this->count++;
            return;
        }
        for ($i = 0; $i < $this->n; $i++) {
            if (!$this->used[$i]) {
                $this->used[$i] = true;
                $this->res[$pos] = $this->mass[$i];

                $this->replace($pos + 1);
                $this->used[$i] = false;
            }
        }
    }

}

try {
    $test = new Task(4, "1234567");
    $test->replace(0);
    $test->counter();
    echo "\n" . $test->count;
} catch (Exception $e) {
    echo $e->getMessage();
}

