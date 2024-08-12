# PHPStudy

## **Git — Commit Standards**

commit Types: Some commonly used types in commit messages include:

feat: Used when adding a new feature.

fix: Used when fixing a bug.

refactor: Used when reorganizing or restructuring existing code.

docs: Used when making changes related to documentation or comments.

style: Used for changes in code formatting, whitespace, punctuation, etc.

test: Used when adding or updating test code or test scenarios.

chore: Used for changes related to auxiliary tools, configuration files, or project organization.

Commit comments should start with “#”. If you don’t use the “#” symbol in your commit messages, automated systems like “danger bot” can perceive these messages as incorrect or inappropriate rather than code changes. Therefore, it is important to use the “#” symbol correctly when writing your commit messages.

The Scope should indicate the specific feature or area of the code changes. If it’s not a specific feature, it should provide a broader context, such as ui, data, utils, ai, gameplay, shader. The Scope name should be written in camelCase format and ideally be a single word.

![img](https://miro.medium.com/v2/resize:fit:1400/1*_wEGcWvhv1X9mMgdHUV66A.png)

***Branch Merge\***

When working on a branch and needing to merge the changes from the “develop” branch, conflicts may arise. When resolving this conflict, the commit message should be as follows:

fix(conflict): Resolve conflicts

\# Merge develop into A branch. Resolve conflicts on GameManager.

***Commonly used git commands:\***

git init: Creates a new empty Git repository in a directory.

git clone [repository]: Copies a remote Git repository to a local directory.

git add [file]: Adds a specific file or all changes to the “stage” for tracking.

git commit -m “[description]”: Records the staged changes as a “commit.” The description should be a text that explains the changes made.

git status: Shows the current state of the repository. It displays which files have been modified, staged, or are still unstaged.

git push: Sends the commits from the local repository to a remote repository. It is used to share the changes made in the local repository.

git pull: Fetches the latest changes from a remote repository to the local repository.

git branch: Lists the current branches. It can be used to create a new branch or switch to an existing branch.

git checkout [branch]: Switches to a specific branch. It can also be used to create a new branch or delete an existing branch.

git merge [branch]: Merges the changes from a specific branch into the current branch.

git log: Shows the commit history in the repository. It displays who made the commits, when they were made, and the changes included.

git reset [commit]: Resets to a specific commit. It can undo commits or discard changes.

git stash: Saves temporary changes in the working directory and reverts to a clean state. Later, these temporary changes can be reapplied