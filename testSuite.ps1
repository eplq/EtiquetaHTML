# $date = $(Get-Date).ToString("yyyyMMddhhmmss")
# $OutputFileName = $date+"_ReportSuite.html"
$OutputFileName = "ReportSuite.html"
php ./vendor/bin/phpunit --testdox-html ./logs/tests/$OutputFileName --coverage-html ./logs/coverage/
