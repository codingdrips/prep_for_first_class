https://github.com/codingdrips/prep_for_first_class.git

 * git init
 
 * git status
 
 * git add .
 
 * git commit -m "first commit"
 
 * git log --oneline

 * To check out the index.html from the second commit, find the number of
    the second commit using the git log, and then   type the following at the prompt:
 
 * git checkout <second commit's number> index.html

 * To discard the effect of the previous operation
  and restore index.html to its state at the end of the third commit, type:
 
 * git reset HEAD index.html
 
 * Then type the following at the prompt:
 
 * git checkout -- index.html
 
 * You can also use git reset to reset the staging area to the last commit without disturbing the working directory.
 
 * git pull --rebase origin master
  
 * git pull [other-branches] // this pulls other branches not master to local env 
 
 * git remote show origin // Show url
 
 * $ git clone -b feature/Bewerberliste https://gitea.sensin.eu/STZSensIn/Online-Application.git // Clone a particular branch
 
 * $ git merge origin/feature/Bewerberliste  --allow-unrelated-histories /7 Allow unrelated history
 
 *  git rebase --abort // Undo rebase
 
 * $ git push --force --set-upstream origin master:programming // Force push to another branch
 
 * $ git ls-tree --name-only -r master // See files on a branch
 * git log --name-status
 
 *  git push -u origin master
 
 * git remote add origin <repository URL>
 
 * git push -u origin master
 
 * $ git remote rm origin
 
 * git clone <repository URL>
 
 * git push origin master:some-new-branch-name
 
 * use "git rebase --edit-todo" to view and edit
 
 * use "git commit --amend" to amend the current commit
 
 * use "git rebase --continue" once you are satisfied with your changes
 
 * git remote -v // Show online/remote github

* git checkout -- index.html // unstage

* git rm --cached <filename> // unstage

* git rebase --abort // Aborts rebase

 * git push origin --all // This pushes all local branches to remote
  * git push origin --tag // This pushes all local tags to remote

  * git push origin --mirror // This pushes all locals including remotes to remote
