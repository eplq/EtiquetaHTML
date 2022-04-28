Param (
    [string] $ScriptTest
)

$date=$(Get-Date).ToString("yyyyMMddhhmmss")
$OutputFileName=$date+"-"+$ScriptTest+".php"
php ./vendor/bin/phpunit ./tests/$ScriptTest.php --testdox-html ./logs/tests/$OutputFileName.html --coverage-html ./logs/coverage/