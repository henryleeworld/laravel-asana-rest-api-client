# Laravel 10 Asana 具象狀態傳輸應用程式介面用戶端

引入 asana 的 asana 套件來擴增在 Asana 上管理待辦事項，可以與團隊一起建立和分享，利用簡單使用的工具、創新的功能和好看的界面設計，提供專案和任務管理的解決方案。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/asana/show/` 來進行專案管理。

----

## 畫面截圖
![](https://i.imgur.com/7KOxI1c.png)
> 專案如同頂層容器，新增專案來幫助追蹤所需資訊

![](https://i.imgur.com/He5va0N.png)
> 進入 Asana 線上共同工作的管理軟體進行工作的協作與管理
