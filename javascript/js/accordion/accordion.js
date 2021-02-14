//console.log('test');


(() =>{
    //DOM #js-accordionを変数elmに代入
    const $elm = document.querySelector('#js-accordion');
    //accordion-triggerをとってくる
    const $trigger = $elm.getElementsByTagName('a');
    //0個目のtriggerにclickHandlerを持たせ、クリックが実行されたらclickHandler実行
    $trigger[0].addEventListener('click',(e) => clickHandler(e));

    const clickHandler = (e) => {
        e.preventDefault();
        //console.log('test');
        //次のコンテンツ要素をとってくる
        const $content = $trigger[0].nextElementSibling;
        if($content.style.display === 'block'){
            //既に表示されてればコンテンツを閉める
            $content.style.display = 'none';
        }else{
            //表示されてなければ表示させる
            $content.style.display = 'block';
        }
    }
}) ();