Param (
    [string] $ScriptTest,
    [string] $TestNames
)

$date=$(Get-Date).ToString("yyyyMMddhhmmss")
$OutputFileName=$date+"-"+$TestNames
php ./vendor/bin/phpunit ./tests/$ScriptTest.php --filter $TestNames --testdox-html ./logs/tests/$OutputFileName.html
