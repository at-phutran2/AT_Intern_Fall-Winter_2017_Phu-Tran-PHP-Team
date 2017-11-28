#Baitap git
1. Begin with Git
	+ "sudo aptitude install git-core" in terminal to install git environment.
	+ Creat Repository then clone Repo to local machine : there are 2 ways to clone git to local Directory https and ssh, Using clone with ssh url make us easy to make any action without login git account.
	+ After copy ssh url open terminal and type :
	cd filename--> git init --> git clone "ssh url".
2.	Working with git
	Git follow:
	Type:  git status to check your current file status, there are 4 status : untracked, unmodified, modified, staged.
	with explaination:
	- untracked file: file which is not ready for pushing to branch with red status
	- staged file: file with green status show that file is ready for pushing to branch.
	with 2 kinds of status their are 2 left: 
	- unmodified: file which pull or fetch from branch with no edited.
	- modified: it's likely untracked file that still not on the stage status, except it's edited. 
3. Difference beetween git pull/ git fetch
	pull = merge + fetch
	fetch = fetch file from branch include new file and file updated without downloading file exist in local directory.
4.	Branching management applies to project
	With master branch:



