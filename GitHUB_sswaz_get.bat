rem git init
rem git add .
rem # Adds the files in the local repository and stages them for commit. To unstage a file, use 'git reset HEAD YOUR-FILE'.
rem git commit -m "adding files"
rem # Commits the tracked changes and prepares them to be pushed to a remote repository. To remove this commit and modify the file, use 'git reset --soft HEAD~1' and commit and add the file again.
rem git remote add origin https://github.com/ctcaz/ctc_az.git
rem # Sets the new remote
rem git remote -v
rem # Verifies the new remote URL
rem git push origin master
rem # Pushes the changes in your local repository up to the remote repository you specified as the origin

git merge https://github.com/ctcaz/ctc_az.git
