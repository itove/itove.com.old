d:
cd z

for /f %%i in ('osql -S HXMYSRV -d dlhotel -U sa -P -h-1 -n -i a.sql') do set num=%%i

rem set /p num=<r.txt

echo %num% > t.txt

curl --cacert cacert.pem -d "num=%num%&key=fuck" https://itove.com/hxmy/q/
