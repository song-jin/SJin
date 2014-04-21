//添加onload函数
function addLoad(func) {
	var oldLoad = window.onload;
	if(typeof oldLoad !== 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			oldLoad();
			func();
		}
	}
}

function init() {
	var map = new BMap.Map('container');//创建地图实例
	var point = new BMap.Point(116.404, 39.915);//创建坐标点
	map.centerAndZoom(point, 15);//初始化地图，设置中心点坐标和地图级别
	map.enableDragging();


	//添加自定义控件 --> 本地搜索控件
	function ZoomControl() {
		this.defaultAnchor = BMAP_ANCHOR_TOP_LEFT;
		this.defaultOffset = new BMap.Size(0, 0); //第一个参数设置左边距，第二个参数设置上边距
		if(typeof initialize != 'function') {
			ZoomControl.prototype.initialize = function() {
				//创建一个DOM元素
				var wrap = document.createElement('div');
				wrap.className = 'topNav';

				var searchBox = document.createElement('input');
				searchBox.className = 'searchBox';
				searchBox.value = 'Search';
				
				var searchBtn = document.createElement('span');
				searchBtn.appendChild(document.createTextNode('搜索'));
				searchBtn.className = 'searchBtn';

				var local = new BMap.LocalSearch(map, {
					renderOptions:{map:map}
				});
				//绑定事件，点击进行本地搜索
				searchBtn.onclick = function(e) {
					local.search(searchBox.value);
					return false;
				}
				//添加DOM元素到地图中
				map.getContainer().appendChild(wrap);
				wrap.appendChild(searchBtn);
				wrap.appendChild(searchBox);
				return wrap;
			}
		}
	}
	ZoomControl.prototype = new BMap.Control();

	//添加自定义控件 --> 


	addControl(map, [
		new BMap.ZoomControl(),
		new BMap.ScaleControl(),
		new ZoomControl(),
	]);
}
//添加控件函数
function addControl(map, control) {
	for (var i = 0; i < control.length; i++) {
		map.addControl(control[i]);
	};
}



addLoad(init);


