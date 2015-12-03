<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anonymous Classes</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <script src="../jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="../action.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
    <h2>Anonymous Classes</h2>
    <pre>
        var_dump(new class('xxx') {
            public function __construct($i) {
                $this->i = $i;
            }
        });
    </pre>
    <br>
    <input id="display" type="button" value="Show" onclick="show('anonymous1');">
    <pre class="code anonymous1">
    <?php
        var_dump(new class('xxx') {
            public function __construct($i) {
                $this->i = $i;
            }
        });
        ?>
    </pre>
    <hr>

    <h3>Kế thừa</h3>
    <pre>
        class SomeClass {
            public $num_extend = 'test';
        }

        var_dump(new class(10) extends SomeClass implements SomeInterface {
            private $num;

            public function __construct($num)
            {
                $this->num = $this->num_extend;
            }
        });
    </pre>
    <input id="display" type="button" value="Show" onclick="show('anonymous2');">
    <pre class="code anonymous2"><?php
            class SomeClass {
                public $num_extend = 'test';
            }

            var_dump(new class(10) extends SomeClass{
                private $num;

                public function __construct($num)
                {
                    $this->num = $this->num_extend;
                }
            });
        ?></pre>
    <hr>

    <h3>Đa hình:</h3>
    <pre>
    class Logger
    {
        public function write(Message $message)
        {
            echo $message->getText();
        }
    }

    interface Message
    {
        public function getText();
    }

    $message = (new class() implements Message {
        public function getText() { return "Interface OK!"; }
    });

    echo Logger->write($message);
    </pre>
    <input id="display" type="button" value="Show" onclick="show('anonymous3');">
    <pre class="code anonymous3"><?php
        class Logger
        {
            public function write(Message $message)
            {
                echo $message->getText();
            }
        }

        interface Message
        {
            public function getText();
        }

        $message = (new class() implements Message {
            public function getText() { return "Interface OK!"; }
        });

        echo (new Logger)->write($message);
        ?></pre>
    <hr>

    <h3>Ví dụ:</h3>
    <pre>
    class Outer
    {
        private $prop = 1;
        protected $prop2 = 2;

        protected function func1()
        {
            return 3;
        }

        public function func2()
        {
            return new class($this->prop) extends Outer {
                private $prop3;

                public function __construct($prop)
                {
                    $this->prop3 = $prop;
                }

                public function func3()
                {
                    return $this->prop2 + $this->prop3 + $this->func1();
                }
            };
        }
    }

    echo (new Outer)->func2()->func3();
    </pre>

    <div class="code anonymous4" style="display: block;"><?php

        class Outer
        {
            private $prop = 1;
            protected $prop2 = 2;

            protected function func1()
            {
                return 3;
            }

            public function func2()
            {
                return new class($this->prop) extends Outer {
                    private $prop3;

                    public function __construct($prop)
                    {
                        $this->prop3 = $prop;
                    }

                    public function func3()
                    {
                        return $this->prop2 + $this->prop3 + $this->func1();
                    }
                };
            }
        }

        echo (new Outer)->func2()->func3(); // 6
        ?></div>
        <input id="display" type="button" value="Show" onclick="show('anonymous4');">
</body>
</html>