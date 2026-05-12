# Submission Log

**Project:** BOSC Community Library  
**Student Name:** MUGAMBE IVAN  
**Registration Number:** 22/BSE/BU/R/1007  
**Repository:** https://github.com/ThrustSoftwares/BOSC-Community-Library  
**Submission Folder:** https://drive.google.com/drive/folders/11K2x-afyUcmtl5vQoQcWGGjDxrD-hkBP?usp=drive_link  
**Course:** BSCT 3221 - Open Source Software  
**Submission Date:** 12 May 2026

## Submission Guide

This repository includes the project source code, documentation, governance files, legal and sustainability analysis, and screenshot evidence for the open source software coursework submission. The screenshots are stored in the repository folder named `screenshots/` to verify the GitHub activity, issue tracking, pull requests, testing commands, and working application features alongside the GitHub repository link above.

## Repository Evidence

| Requirement | Evidence |
| --- | --- |
| Public GitHub repository | `BOSC-Community-Library` on GitHub |
| Open source license | `LICENSE` and GPLv3 metadata in `composer.json` |
| Community standards | `CODE_OF_CONDUCT.md` |
| Contributor guidance | `CONTRIBUTING.md` |
| Issue and PR templates | `.github/ISSUE_TEMPLATE` and `.github/PULL_REQUEST_TEMPLATE.md` |
| Legal analysis | `LEGAL_ANALYSIS.md` |
| Sustainability model | `SUSTAINABILITY.md` |
| Government proposal | `GOVERNMENT_PROPOSAL.md` |
| Governance reflection | `GOVERNANCE_REFLECTION.md` |
| Final project audit | `DAY7_PROJECT_AUDIT.md` |

## Installation And Running Instructions 

The project is a Laravel/PHP application. Before running it locally, install the following software:

- PHP 8.3 or newer
- Composer
- Node.js and npm
- Git

Confirm the required tools are installed by running:

```bash
php -v
composer --version
node -v
npm -v
git --version
```

After installing the requirements, run the project with these commands:

```bash
git clone https://github.com/ThrustSoftwares/BOSC-Community-Library.git
cd BOSC-Community-Library
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run build
php artisan serve
```

After running `php artisan serve`, open the local URL shown in the terminal, usually:

```text
http://127.0.0.1:8000
```

For Windows Command Prompt, the environment file can be copied using:

```cmd
copy .env.example .env
```

For Windows PowerShell, the same step can be run as:

```powershell
Copy-Item .env.example .env
```

The project uses SQLite by default through `.env.example`, so no separate MySQL setup is required for a basic local review.

## GitHub Activity Evidence

The screenshots below show consistent GitHub activity across the project period, including commits made on different days, repository branches, and the GitHub profile contribution graph.

### Commit Activity

![Day 1 and Day 2 commit history](<screenshots/Day 1and 2 commits.png>)

**Description:** Commit history showing early project setup and development work completed during Day 1 and Day 2.

![Day 3, Day 4 and Day 5 commit history](<screenshots/Day 3,4 and 5 commits.png>)

**Description:** Commit history showing continued implementation, documentation, and project improvements during Day 3, Day 4, and Day 5.

![Day 6 and Day 7 commit history](<screenshots/Day6 and 7commits.png>)

**Description:** Commit history showing final project refinements, testing, documentation updates, and submission preparation during Day 6 and Day 7.

### Branch Activity

![GitHub branch activity](<screenshots/git-activity-branches.png>)

**Description:** GitHub branches used during development, showing that project work was organized through separate branches before being merged.

### GitHub Profile Contributions

![GitHub profile contribution graph](<screenshots/git-profile-contributions.png>)

**Description:** GitHub profile contribution graph showing project activity during the coursework period.

## Issue and Pull Request Evidence

The screenshots below show closed issues and merged pull requests. They demonstrate that project tasks were tracked using GitHub Issues and completed through pull requests before being merged into the repository.

### Resolved Issues

![Resolved issue number 1](screenshots/resolved-issue-1.png)

**Description:** Closed GitHub issue showing one of the completed project tasks and its resolution status.

![Closed issue number 5](screenshots/closed-issue-5.png)

**Description:** Closed GitHub issue showing another resolved project task, confirming issue tracking was used up to the final fixes.

### Merged Pull Requests

![Merged pull requests list](<screenshots/merged pull reuests.png>)

**Description:** GitHub pull requests page showing merged pull requests used to integrate completed project work.

![Merged pull request detail](screenshots/merged-pull-request-3.png)

**Description:** Detailed merged pull request evidence showing the PR status and the completed review and merge workflow.

## Verification and Runtime Evidence

The following screenshots show that the project was tested, validated, and run successfully in the local development environment.

### Test Results

![Passing Laravel tests](<screenshots/tests-passing.png>)

**Description:** Terminal output showing the Laravel test suite running successfully with `php artisan test`.

### Composer Validation

![Composer validation output](<screenshots/composer-validate.png>)

**Description:** Terminal output showing Composer validation working successfully for the project setup.

## Application Feature Evidence

The screenshots below show the working BOSC Community Library application and its main features.

### Homepage

![BOSC Community Library homepage](<screenshots/homepage.png>)

**Description:** Running homepage showing the public library interface and the main project presentation.

### Search Functionality

![Library search results](<screenshots/search-results.png>)

**Description:** Search functionality showing that library resources can be filtered and found through the application interface.

### Luganda Language Support

![Luganda language mode](<screenshots/language functionality-luganda.png>)

**Description:** Library interface displayed in Luganda, showing multilingual support for local community users.

### Authenticated User Dashboard

![Authenticated user dashboard](<screenshots/dashboard.png>)

**Description:** Dashboard shown after user authentication, confirming that the login-protected user area is working.

## Final Verification Commands

The project was checked using the following commands:

```bash
php artisan test
composer validate --no-check-publish
git status --short --branch
```

## Submission Checklist

- [x] GitHub repository link added to the Google Drive submission.
- [x] `SUBMISSION_LOG.md` prepared as a submission guide.
- [x] `GOVERNANCE_REFLECTION.md` committed for governance reflection evidence.
- [x] GitHub issues were created and closed.
- [x] Pull requests were merged.
- [x] GitHub activity screenshots were saved in `screenshots/`.
- [x] Resolved issue and pull request screenshots were saved in `screenshots/`.
- [x] GitHub profile contribution graph screenshot was saved in `screenshots/`.
- [x] Test and validation screenshots were saved in `screenshots/`.
- [x] Application feature screenshots were saved in `screenshots/`.
- [x] Final repository evidence is available through the GitHub repository link.
