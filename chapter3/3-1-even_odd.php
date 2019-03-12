<?PHP
/* if문 예제 : 짝수/홀수 판별
 * if문은 조건 분기 및 제어를 위한 제어문
 */

$num = 80;  // num에 80이 입력되었다고 가정!
            // 실제 구현에서는 POST/GET Method 등을 통해 입력받거나,
            // DB 에서 값을 전달받게 될 것임!

if ($num%2==0)
{
    echo "$num : 짝수";
}
else
{
    echo "$num : 홀수";
}
?>
