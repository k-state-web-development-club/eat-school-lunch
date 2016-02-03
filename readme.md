# KSU WDC Entry for E.A.T. School Lunch Hackathon

(more info to come)

## Getting Started

To get started with our project, fork the KSU WCD organization's repository to your own Github account.  Then ssh into our development server and from your home directory:  `git clone git@github.com:<your user name>/eat-school-lunch.git`

Then, to set a remote named upstream to our main repository: `git remote add upstream git@github.com:k-state-web-development-club/eat-school-lunch.git`

## Keeping your fork up-to-date

Unlike systems like Subversion, Git can have multiple remotes. A remote is the name for a URL of a Git repository. By default your fork will have a remote named "origin" which points to your fork, but you can add another remote named "codeigniter" which points to `git://github.com:k-state-web-development-club/eat-school-lunch.git`. This is a read-only remote but you can pull from this develop branch to update your own.

If you are using command-line you can do the following:

1. `git fetch upstream`
1. `git rebase upstream/master`
1. `git push origin master`

Now your fork is up to date. This should be done regularly, or before you send a pull request at least.
