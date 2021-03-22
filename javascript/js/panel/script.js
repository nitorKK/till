
const panels = document.querySelectorAll('.panel');
//クラス、ID、セレクタを取得できる
//.panelクラス全て取得する

//nodelistの確認
/* console.log(panels[1]); */

/* console.log(panels[0]); */


panels.forEach((panel) => {
    //foreachでpanelクラスを全てループさせる
/*     console.log(panel); */

panel.addEventListener('click', () => {
        //イベントリスナーを使用して、クリックするとイベントが起こるように変更
/*     console.log(123); */
    
    //activeクラスを置く前にactiveクラスを削除するfunctionを作成
    removeActiveClasses()
    
    //panelクラスにclassListでactiveクラスを付与させる
    panel.classList.add('active')
    })
})


//activeクラスを削除するfunctionを作成
//複数のパネルがあるので、ループし削除する
function removeActiveClasses() {
    //一つの場合は引数無は省略してfunctionを記載できる*((panel,index.arr) => {})
    panels.forEach(panel => {
        panel.classList.remove('active')
    }) 
}