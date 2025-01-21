# [sso_google](https://github.com/n138-kz/sso_google)

## Activity

[![GitHub repo license](https://img.shields.io/github/license/n138-kz/sso_google)](/LICENSE)
[![GitHub repo size](https://img.shields.io/github/repo-size/n138-kz/sso_google)](/../../)
[![GitHub repo file count](https://img.shields.io/github/directory-file-count/n138-kz/sso_google)](/../../)
[![GitHub code size in bytes](https://img.shields.io/github/languages/code-size/n138-kz/sso_google)](/../../)
[![GitHub last commit](https://img.shields.io/github/last-commit/n138-kz/sso_google)](/../../commits)
[![GitHub commit activity](https://img.shields.io/github/commit-activity/w/n138-kz/sso_google)](/../../commits)
[![GitHub commit activity](https://img.shields.io/github/commit-activity/t/n138-kz/sso_google)](/../../commits)
[![GitHub issues](https://img.shields.io/github/issues/n138-kz/sso_google)](/../../issues)
[![GitHub issues closed](https://img.shields.io/github/issues-closed/n138-kz/sso_google)](/../../issues)
[![GitHub pull requests closed](https://img.shields.io/github/issues-pr-closed/n138-kz/sso_google)](/../../pulls)
[![GitHub pull requests](https://img.shields.io/github/issues-pr/n138-kz/sso_google)](/../../pulls)
[![GitHub language count](https://img.shields.io/github/languages/count/n138-kz/sso_google)](/../../)
[![GitHub top language](https://img.shields.io/github/languages/top/n138-kz/sso_google)](/../../)

## Refs

- [Google公式リファレンス](https://developers.google.com/identity/gsi/web/guides/migration?hl=ja)
- [Developer Console](https://console.cloud.google.com/apis/credentials?hl=ja&project=upbeat-splicer-325708)
- [[Private]Auth-via-Google-auth](https://github.com/n138-kz/Auth-via-Google-auth)
- [[Public]Auth-Google](https://github.com/n138-kz/Auth-Google)

## Setup(memo)

- [client](#client)
- [server](#server)

### client

1. Download the this repository. Or view https://n138-kz.github.io/sso_google

### server

1. Download the this repository.
1. Run php-compose install
    ```composer
    composer require google/apiclient
    ```
1. Fix the `CLIENT_ID` in `server/index.php`
