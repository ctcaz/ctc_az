git init
git add .
# Adds the files in the local repository and stages them for commit. To unstage a file, use 'git reset HEAD YOUR-FILE'.
git commit -m "adding files"
# Commits the tracked changes and prepares them to be pushed to a remote repository. To remove this commit and modify the file, use 'git reset --soft HEAD~1' and commit and add the file again.
git remote add origin https://github.com/ctcaz/ctc_az.git
# Sets the new remote
git remote -v
# Verifies the new remote URL
