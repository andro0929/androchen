$(document).ready(function() {
    /*  http://www.mattvarone.com/web-design/uitotop-jquery-plugin/    */
    var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear' 
    };
	$().UItoTop({ easingType: 'easeOutQuart' });
});

$(document).ready(function(){
    $('#pre1').click(function() {
        if ($('#show1').is(':hidden')) 
            $('#show1').slideDown('slow', function() {});
        else $('#show1').slideUp('slow', function() {});
    });
});
// [jQ]用 jQuery 做廣告 – 左右水平廣告輪播 http://goo.gl/cC8Ku
$(function(){
    // 先取得必要的元素並用 jQuery 包裝
    // 再來取得 $block 的高度及設定動畫時間
    var $block = $('#roll_img_block'),
        $slides = $('ul.list', $block),
        _width = $block.width(),
        $li = $('li', $slides),
        _animateSpeed = 400, 
        // 加入計時器, 輪播時間及控制開關
        timer, _showSpeed = 2500, _stop = false;
 
    // 產生 li 選項
    var _str = '';
    for(var i=0, j=$li.length;i<j;i++){
        // 每一個 li 都有自己的 className = playerControl_號碼
        _str += '<li class="playerControl_' + (i+1) + '"></li>';
    }
 
    // 產生 ul 並把 li 選項加到其中
    var $playerControl = $('<ul class="playerControl"></ul>').html(_str).appendTo($slides.parent()).css('left', function(){
        // 把 .playerControl 移到置中的位置
        return (_width - $(this).width()) / 2;
    });
 
    // 幫 li 加上 click 事件
    var $playerControlLi = $playerControl.find('li').click(function(){
        var $this = $(this);
        $this.addClass('current').siblings('.current').removeClass('current');
 
        clearTimeout(timer);
        // 移動位置到相對應的號碼
        $slides.stop().animate({
            left: _width * $this.index() * -1
        }, _animateSpeed, function(){
            // 當廣告移動到正確位置後, 依判斷來啟動計時器
            if(!_stop) timer = setTimeout(move, _showSpeed);
        });
 
        return false;
    }).eq(0).click().end();
    /*
    // 如果滑鼠移入 $block 時
    $block.hover(function(){
        // 關閉開關及計時器
        _stop = true;
        clearTimeout(timer);
    }, function(){
        // 如果滑鼠移出 $block 時
        // 開啟開關及計時器
        _stop = false;
        timer = setTimeout(move, _showSpeed);
    });
    */
    // 計時器使用
    function move(){
        var _index = $('.current').index();
        $playerControlLi.eq((_index + 1) % $playerControlLi.length).click();
    }
});

// [jQ]用 jQuery 做畫廊 – 中間突顯位移式的商品展示 http://goo.gl/ANXbA
// 當網頁載完後執行(因為要抓圖片的寬高)
$(window).load(function(){
	// 先取得相關區塊及圖片的寬高
	// 並先計算出大圖片要垂直置中所需要的 top 值
	var $gallery = $('#roll_gallery'), 
		$frame = $gallery.find('ul'), 
		_frameHeight = $frame.height(), 
		_frameWidth = $frame.width(), 
		$li = $frame.find('li'), 
		$img = $li.find('img'), 
		_imgLength = $img.length, 
		_imgWidth = $img.width(),
		_imgHeight = $img.height(),
		_topDiff = (_frameHeight - _imgHeight) / 2, 
		_animateSpeed = 200;
 
	// 設定每張圖片縮放比例
	// _totalWidth 用來記錄寬度累加
	var resizeRatio = [ 0.6, 0.7, 0.8, 1, 0.8, 0.7, 0.6], 
		liCss = [], 
		_totalWidth = 0;
 
	// 預先算出每張圖片縮放後的總寬度
	var _m = 0;
	$img.each(function(i){ 
		_m += $(this).width() * resizeRatio[i];
	});
	// 平均分配要重疊的寬度
	var _leftDiff = Math.ceil((_m - _frameWidth) / (_imgLength - 1));
 
	// 設定每一個 li 的位置及圖片寬高
	$li.each(function(i){
		var $this = $(this), 
			_width = _imgWidth * resizeRatio[i],
			_height = _imgHeight * resizeRatio[i];
 
		liCss.push({
			height: _height, 
			width: _width, 
			left: _totalWidth  + (i == _imgLength - 1 ? 1 : 0), 
			top: _topDiff + (_imgHeight - _height) / 2, 
			zIndex: resizeRatio[i] * 10
		});
 
		$this.css(liCss[liCss.length-1]).css({
			position: 'absolute',
			border: '1px solid white'
		}).data('_index', i).find('img').css({
			width: '100%', 
			height: '100%'
		});
 
		_totalWidth += _width - _leftDiff;
	});
 
	// 當滑鼠點擊在 $gallery 中的 .controls 時
	$gallery.on('click', '.controls', function(){
		var $button = $(this);
 
		// 重新計算每一個 li 的位置及圖片寬高
		$li.each(function(){
			var $this = $(this), 
				_index = $this.data('_index');
 
			_index = ($button.hasClass('next') ? (_index - 1 + _imgLength) : (_index + 1)) % _imgLength;
			$this.data('_index', _index);
 
			$this.stop(false, true).animate(liCss[_index], _animateSpeed);
		});
 
		return false;
	});
});