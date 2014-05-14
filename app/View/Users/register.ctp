<html>
    <head>
        <style>

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;


                font: bold 14px Arial, sans-serif;
            }


            html {
                height: 100%;
                background: white;
                background: radial-gradient(circle, #fff 20%, #ccc);
                background-size: cover;
            }


            #calculator {
                width: 325px;
                height: auto;

                margin: 100px auto;
                padding: 20px 20px 9px;

                background: rgb(255,160,0);
                background:linear-gradient(rgb(250, 160, 0) , rgb(250, 0, 0) ) repeat scroll 0% 0% transparent;
                border-radius: 3px;
                box-shadow: 0px 4px rgb(255,0,0), 0px 10px 15px rgba(0, 0, 0, 0.2);
            }


            .top span.clear {
                float: left;
            }


            .top input{
                height: 40px;
                width: 212px;



                padding: 0 10px;

                background: rgba(0, 0, 0, 0.2);
                border-radius: 3px;
                box-shadow: inset 0px 4px rgba(0, 0, 0, 0.2);


                font-size: 17px;
                line-height: 40px;
                color: white;
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
                text-align: right;
                letter-spacing: 1px;
            }

            .keys, .top {overflow: hidden;}

            .keys span, .top span.clear {
                float: left;
                position: relative;
                top: 0;

                cursor: pointer;

                width: 66px;
                height: 36px;

                background: white;
                border-radius: 3px;
                box-shadow: 0px 4px rgba(0, 0, 0, 0.2);

                margin: 0 7px 11px 0;

                color: #888;
                line-height: 36px;
                text-align: center;


                user-select: none;


                transition: all 0.2s ease;
            }

            .keys span.operator {
                background: #FFF0F5;
                margin-right: 0;
            }

            .keys span.eval {
                background: #f1ff92;
                box-shadow: 0px 4px #9da853;
                color: #888e5f;
            }

            .top span.clear {
                background: #ff9fa8;
                box-shadow: 0px 4px #ff7c87;
                color: white;
            }

            /* Some hover effects */
            .keys span:hover {
                background: #9c89f6;
                box-shadow: 0px 4px #6b54d3;
                color: white;
            }

            .keys span.eval:hover {
                background: #abb850;
                box-shadow: 0px 4px #717a33;
                color: #ffffff;
            }

            .top span.clear:hover {
                background: #f68991;
                box-shadow: 0px 4px #d3545d;
                color: white;
            }


            .keys span:active {
                box-shadow: 0px 0px #6b54d3;
                top: 4px;
            }

            .keys span.eval:active {
                box-shadow: 0px 0px #717a33;
                top: 4px;
            }

            .top span.clear:active {
                top: 4px;
                box-shadow: 0px 0px #d3545d;
            }
        </style>
    </head>
    <body>
    <?php 
        $operands = array('+', '-', '/', '*');
        $rand_operand = $operands[rand(0,3)]; 
        $first_nb = rand(0,500);
        $second_nb = rand(0,500);
        $solved="";

  
        if($rand_operand=="+") $solved = $first_nb + $second_nb;
         if($rand_operand=="-") $solved = $first_nb - $second_nb;
          if($rand_operand=="*") $solved = $first_nb * $second_nb;
           if($rand_operand=="/") $solved = $first_nb / $second_nb;

    
echo $this->form->create('User', array('action' => 'register'));
echo $this->form->input('username');
echo $this->form->input('email');
echo $this->form->input('firstname');
echo $this->form->input('lastname');
echo $this->form->input('passwd');
echo $this->form->input('passwd_confirm', array('type' => 'password'));
echo $this->form->input('nb_confirm', array('value' => $solved, 'label' => $first_nb.' '.$rand_operand.' '.$second_nb.' = ? (Hard to solve? use our new calculator!)'));
echo $this->form->submit();
echo $this->form->end(); ?>
        <form name="Calc">
            <div id="calculator">
                <!– Screen and clear key –>
                <div class="top">
                    <span class="clear" OnClick="Calc.Input.value = ' '">C</span>
                    <input type="text" name="Input">
                </div>
                <div class="keys">
                    <!– operators and other keys –>
                    <span OnClick="Calc.Input.value += '7'">7</span>
                    <span OnClick="Calc.Input.value += '8'">8</span>
                    <span OnClick="Calc.Input.value += '9'">9</span>
                    <span class="operator" OnClick="Calc.Input.value += '+'">+</span>
                    <span OnClick="Calc.Input.value += '4'">4</span>
                    <span OnClick="Calc.Input.value += '5'">5</span>
                    <span OnClick="Calc.Input.value += '6'">6</span>
                    <span class="operator" OnClick="Calc.Input.value += '-'">-</span>
                    <span OnClick="Calc.Input.value += '1'">1</span>
                    <span OnClick="Calc.Input.value += '2'">2</span>
                    <span OnClick="Calc.Input.value += '3'">3</span>
                    <span class="operator" OnClick="Calc.Input.value += '/'">/</span>
                    <span OnClick="Calc.Input.value += '0'">0</span>
                    <span OnClick="Calc.Input.value += '.'">.</span>
                    <span class="eval" OnClick="Calc.Input.value = eval(Calc.Input.value)">=</span>
                    <span class="operator" OnClick="Calc.Input.value += '*'">x</span>
                </div>
            </div>
    </body>
</html>