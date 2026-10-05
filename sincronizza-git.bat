@echo off
setlocal
cd /d "%~dp0"

echo Cartella: %CD%
git rev-parse --is-inside-work-tree >nul 2>&1
if errorlevel 1 (
    echo Errore: questa cartella non e' un repository Git.
    pause
    exit /b 1
)

set /p "COMMIT_MSG=Messaggio del commit: "
if "%COMMIT_MSG%"=="" (
    echo Errore: inserisci un messaggio per il commit.
    pause
    exit /b 1
)

git add .
if errorlevel 1 goto :error

git diff --cached --quiet
if not errorlevel 1 goto :push

git commit -m "%COMMIT_MSG%"
if errorlevel 1 goto :error

:push
git push
if errorlevel 1 goto :error

echo.
echo Modifiche inviate al server.
pause
exit /b 0

:error
echo.
echo Operazione non completata. Controlla il messaggio sopra.
pause
exit /b 1
