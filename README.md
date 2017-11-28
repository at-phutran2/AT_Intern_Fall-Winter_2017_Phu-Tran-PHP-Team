#Baitap git
1. Begin with Git
	* "sudo aptitude install git-core" in terminal to install git environment.
	* Creat Repository then clone Repo to local machine : there are 2 ways to clone git to local Directory https and ssh, Using clone with ssh url make us easy to make any action without login git account.
	* After copy ssh url open terminal and type :
	cd filename--> git init --> git clone "ssh url".
2.	Working with git
	Git follow:
	Type:  git status to check your current file status, there are 4 status : untracked, unmodified, modified, staged.
	with explaination:
	* untracked file: file which is not ready for pushing to branch with red status
	* staged file: file with green status show that file is ready for pushing to branch.
	with 2 kinds of status their are 2 left: 
	* unmodified: file which pull or fetch from branch with no edited.
	* modified: it's likely untracked file that still not on the stage status, except it's edited. 
3. Difference beetween git pull/ git fetch
	pull = merge + fetch
	fetch = fetch file from branch include new file and file updated without downloading file exist in local directory.
4.	Branching management applies to project
	With master branch:
	......
5.	Gitignore
	"touch .gitignore" to create gitignore file then open it by "open .gitignore" and text untracked filename you want to delete in untracked status. 
	Using gitignore to store file untracked (file you want to delete)
	* another way to remove untracked file by using this command "git -rm --cached filename"
6. Git Branch and merege:
	Using Branch in git make thing easy to manage
	* Git branch create: " git branch branchname"
	(git branch -d branchname) to delete branch
	("git branch") to check current branch
	* After create using "git checkout" to connect to new branch"
	As usually we use "git push origin master" to push our code to master branch if we've just create the new branch the command will turn to : git push origin branchname
If we want to merge code from new branch to master branch, using "git check out master" to enter master branch --> then using git merge branchname (merge file from branchname to master branch)
7. Git Pull	



