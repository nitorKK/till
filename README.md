# crage-nntd-coding

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="20" role="img" aria-label="npm: 7.24.1"><title>npm: 7.24.1</title><linearGradient id="s" x2="0" y2="100%"><stop offset="0" stop-color="#bbb" stop-opacity=".1"/><stop offset="1" stop-opacity=".1"/></linearGradient><clipPath id="r"><rect width="80" height="20" rx="3" fill="#fff"/></clipPath><g clip-path="url(#r)"><rect width="35" height="20" fill="#555"/><rect x="35" width="45" height="20" fill="#e05d44"/><rect width="80" height="20" fill="url(#s)"/></g><g fill="#fff" text-anchor="middle" font-family="Verdana,Geneva,DejaVu Sans,sans-serif" text-rendering="geometricPrecision" font-size="110"><text aria-hidden="true" x="185" y="150" fill="#010101" fill-opacity=".3" transform="scale(.1)" textLength="250">npm</text><text x="185" y="140" transform="scale(.1)" fill="#fff" textLength="250">npm</text><text aria-hidden="true" x="565" y="150" fill="#010101" fill-opacity=".3" transform="scale(.1)" textLength="350">7.24.1</text><text x="565" y="140" transform="scale(.1)" fill="#fff" textLength="350">7.24.1</text></g></svg>

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="90" height="20" role="img" aria-label="node: 14.18.0"><title>node: 14.18.0</title><linearGradient id="s" x2="0" y2="100%"><stop offset="0" stop-color="#bbb" stop-opacity=".1"/><stop offset="1" stop-opacity=".1"/></linearGradient><clipPath id="r"><rect width="90" height="20" rx="3" fill="#fff"/></clipPath><g clip-path="url(#r)"><rect width="37" height="20" fill="#555"/><rect x="37" width="53" height="20" fill="#007ec6"/><rect width="90" height="20" fill="url(#s)"/></g><g fill="#fff" text-anchor="middle" font-family="Verdana,Geneva,DejaVu Sans,sans-serif" text-rendering="geometricPrecision" font-size="110"><text aria-hidden="true" x="195" y="150" fill="#010101" fill-opacity=".3" transform="scale(.1)" textLength="270">node</text><text x="195" y="140" transform="scale(.1)" fill="#fff" textLength="270">node</text><text aria-hidden="true" x="625" y="150" fill="#010101" fill-opacity=".3" transform="scale(.1)" textLength="430">14.18.0</text><text x="625" y="140" transform="scale(.1)" fill="#fff" textLength="430">14.18.0</text></g></svg>


## install 
```sh
npm install
```
## gulp 
```sh
npx gulp
```
## ディレクトリ構成
```
docroot/
  ├── _json/
  ├── _templates/
      ├── include/
      ├── page/
  ├── html/
  ├── _src/
      ├── scss/
          ├── Foundation/
          ├── Layout/
          ├── Utility
          ├── Object/
              └── Component/
              └── Project/
```
### ディレクトリ構成

+ include<br>
ejsのパーシャルファイル
+ page<br>
HTMLのコンパイルディレクトリ

+ scss<br>
Foundation　サイト全体のデフォルトスタイルを管理<br>
Layout　各ページを構成するサイト全体で共通したエリアを管理<br>
Object(Component/Project)　サイト全体で再利用できるパターンを持つモジュール<br>
Componentは図形１つの単位<br>
Projectはグループ化して動かす単位<br>
Utility componentとProjectのモディファイアで解決することができないスタイル