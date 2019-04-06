<?php
$num1 = rand(5, 10); // pick a random number from 0 to 10 inclusive
$num2 = rand(0, 5); // same idea
$o = rand(0, 1); // 0 = plus, 1 = minus, 2 = multiply
/* This function will use the integer value of $operand to show either a plus, minus, or times. */
if ( ! function_exists('operand')){
    function operand($o)
    {
        switch ($o) {
            case 0:
                return "+";
                break;
            case 1:
                return "-";
                break;
            case 2:
                return "*";
                break;
            default:
                return "?";
                break; //Remark: We shouldn't ever get down here.
        }
    }
}
?>

<label for="math" class="control-label" style="@if (isset($color)) color: {{$color}}; @endif direction: ltr;text-align: left;"> What's  solution ?  <?php echo $num1 . "&nbsp;" . operand($o) . "&nbsp;" . $num2 . ""; ?> </label><br>
<input type="text" style="color:#000;width:100%;background-color:#fff "  name="userAnswer" required>
<input type="hidden" name="num1" value="<?php echo $num1; ?>">
<input type="hidden" name="operand" value="<?php echo $o; ?>">
<input type="hidden" name="num2" value="<?php echo $num2; ?>">
<br>
