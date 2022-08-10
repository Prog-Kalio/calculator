<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="A Simple Calculator" />
        <meta name="author" content="Kalio Tamunotonye" />
        <title>A Simple Calculator</title>
        <!-- CSS Files -->
        <link rel="stylesheet" href="public/css/bootstrap.min.css" />
        <link rel="stylesheet" href="public/css/style.css" />
    </head>

    <body>
        <div class="container bg-dark" style="height:100vh">
            <div class="row mt-5">
                <div class="col-4" style="display:hide"></div>
                <div class="col-4 pt-3">
                <p class="title text-center text-white">A Simple Calculator</p>
                    <div class="card">
                        <div class="card-header">
                        <div class="class-title text-right"><small id="calc_question"></small></div>
                        <div class="class-title text-right"><small id="calc_sign"></small></div>
                        <div class="class-title text-right"><small id="calc_question2"></small></div>
                        <h5 class="class-title text-center" id="calc_response"></h5>
                        </div>
                        <div class="card-body d-flex flex-row justify-content-between p-3 mt-2">
                            <div class="class-content p-2 bg-success text-center" id="calc_button1" style="border:1px solid black; width:16%; border-radius:50%">ON</div>
                            <div class="class-content p-2 bg-warning text-center" id="calc_button2" style="border:1px solid black; width:16%; border-radius:50%">C</div>
                            <div class="class-content p-2 bg-warning text-center" id="calc_button3" style="border:1px solid black; width:16%; border-radius:50%">CE</div>
                            <div class="class-content p-2 bg-danger text-center" id="calc_button4" style="border:1px solid black; width:16%; border-radius:50%">OFF</div>
                        </div>
                        <div class="card-body d-flex flex-row justify-content-between p-3 mt-2">
                            <div class="class-content p-2 bg-light text-center" id="calc_num1" style="border:1px solid black; width:16%; border-radius:50%">1</div>
                            <div class="class-content p-2 bg-light text-center" id="calc_num2" style="border:1px solid black; width:16%; border-radius:50%">2</div>
                            <div class="class-content p-2 bg-light text-center" id="calc_num3" style="border:1px solid black; width:16%; border-radius:50%">3</div>
                            <div class="class-content p-2 bg-info text-center" id="calc_formula1" style="border:1px solid black; width:16%; border-radius:50%">+</div>
                        </div>
                        <div class="card-body d-flex flex-row justify-content-between p-3 mt-2">
                            <div class="class-content p-2 bg-light text-center" id="calc_num4" style="border:1px solid black; width:16%; border-radius:50%">4</div>
                            <div class="class-content p-2 bg-light text-center" id="calc_num5" style="border:1px solid black; width:16%; border-radius:50%">5</div>
                            <div class="class-content p-2 bg-light text-center" id="calc_num6" style="border:1px solid black; width:16%; border-radius:50%">6</div>
                            <div class="class-content p-2 bg-info text-center" id="calc_formula2" style="border:1px solid black; width:16%; border-radius:50%">-</div>
                        </div>
                        <div class="card-body d-flex flex-row justify-content-between p-3 mt-2">
                            <div class="class-content p-2 bg-light text-center" id="calc_num7" style="border:1px solid black; width:16%; border-radius:50%">7</div>
                            <div class="class-content p-2 bg-light text-center" id="calc_num8" style="border:1px solid black; width:16%; border-radius:50%">8</div>
                            <div class="class-content p-2 bg-light text-center" id="calc_num9" style="border:1px solid black; width:16%; border-radius:50%">9</div>
                            <div class="class-content p-2 bg-info text-center" id="calc_formula3" style="border:1px solid black; width:16%; border-radius:50%">&times;</div>
                        </div>
                        <div class="card-body d-flex flex-row justify-content-between p-3 mt-2 mb-2">
                            <div class="class-content p-2 bg-light text-center" id="calc_num0" style="border:1px solid black; width:16%; border-radius:50%">0</div>
                            <div class="class-content p-2 bg-info text-center" id="calc_formula4" style="border:1px solid black; width:16%; border-radius:50%">&#247;</div>
                            <div class="class-content p-2 bg-info text-center" id="calc_formula5" style="border:1px solid black; width:16%; border-radius:50%">%</div>
                            <div class="class-content p-2 bg-primary text-center hover-zoom" id="calc_formula6" style="border:1px solid black; width:16%; border-radius:50%" onclick="myCalculator()">=</div>
                        </div>
                    </div>
                
                </div>
                <div class="col-4"></div>
            </div>
        </div>


        <!-- Js scripts -->
        <script>
            // For question 1
            document.getElementById("calc_num0").addEventListener("click",function(){document.getElementById("calc_question").innerHTML = 0;});
            document.getElementById("calc_num1").addEventListener("click",function(){document.getElementById("calc_question").innerHTML = 1;});
            document.getElementById("calc_num2").addEventListener("click",function(){document.getElementById("calc_question").innerHTML = 2;});
            document.getElementById("calc_num3").addEventListener("click",function(){document.getElementById("calc_question").innerHTML = 3;});
            document.getElementById("calc_num4").addEventListener("click",function(){document.getElementById("calc_question").innerHTML = 4;});
            document.getElementById("calc_num5").addEventListener("click",function(){document.getElementById("calc_question").innerHTML = 5;});
            document.getElementById("calc_num6").addEventListener("click",function(){document.getElementById("calc_question").innerHTML = 6;});
            document.getElementById("calc_num7").addEventListener("click",function(){document.getElementById("calc_question").innerHTML = 7;});
            document.getElementById("calc_num8").addEventListener("click",function(){document.getElementById("calc_question").innerHTML = 8;});
            document.getElementById("calc_num9").addEventListener("click",function(){document.getElementById("calc_question").innerHTML = 9;});
            // For formulas
            document.getElementById("calc_formula1").addEventListener("click",function(){document.getElementById("calc_sign").innerHTML = "+";});
            document.getElementById("calc_formula2").addEventListener("click",function(){document.getElementById("calc_sign").innerHTML = "-";});
            document.getElementById("calc_formula3").addEventListener("click",function(){document.getElementById("calc_sign").innerHTML = "*";});
            document.getElementById("calc_formula4").addEventListener("click",function(){document.getElementById("calc_sign").innerHTML = "&#247;";});
            document.getElementById("calc_formula5").addEventListener("click",function(){document.getElementById("calc_sign").innerHTML = "%";});
            // For question 2
            document.getElementById("calc_num0").addEventListener("click",function(){document.getElementById("calc_question2").innerHTML = 0;});
            document.getElementById("calc_num1").addEventListener("click",function(){document.getElementById("calc_question2").innerHTML = 1;});
            document.getElementById("calc_num2").addEventListener("click",function(){document.getElementById("calc_question2").innerHTML = 2;});
            document.getElementById("calc_num3").addEventListener("click",function(){document.getElementById("calc_question2").innerHTML = 3;});
            document.getElementById("calc_num4").addEventListener("click",function(){document.getElementById("calc_question2").innerHTML = 4;});
            document.getElementById("calc_num5").addEventListener("click",function(){document.getElementById("calc_question2").innerHTML = 5;});
            document.getElementById("calc_num6").addEventListener("click",function(){document.getElementById("calc_question2").innerHTML = 6;});
            document.getElementById("calc_num7").addEventListener("click",function(){document.getElementById("calc_question2").innerHTML = 7;});
            document.getElementById("calc_num8").addEventListener("click",function(){document.getElementById("calc_question2").innerHTML = 8;});
            document.getElementById("calc_num9").addEventListener("click",function(){document.getElementById("calc_question2").innerHTML = 9;});
            function myCalculator() {
                var x = document.getElementById("calc_question").innerHTML;
                var y = document.getElementById("calc_sign").innerHTML;
                var z = document.getElementById("calc_question2").innerHTML;

                var calc_answer = x + y + z;

                document.getElementById("calc_response").innerHTML = calc_answer;

            }
        </script>
        <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="public/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="public/js/custom.js"></script>
    </body>
</html>