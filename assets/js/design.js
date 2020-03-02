/* URL */

function goUrl(url) { window.open( base_url + url, "_self")}; //


function goUrl_00()	{ window.open( base_url, "_self")};
function goUrl_11() { window.open( base_url + "app/presence","_self")};
function goUrl_12() { window.open( base_url + "app/birth","_self")};
function goUrl_13() { window.open( base_url + "app/exam","_self")};
function goUrl_14() { window.open( base_url + "app/sunghwa","_self")};
function goUrl_15() { window.open( base_url + "","_self")};



function goUrl_20() { window.open( base_url + "bless/app/fam_00", "_self")};
function goUrl_21() { window.open( base_url + "bless/app/fam_01_0", "_self")};
function goUrl_22() { window.open( base_url + "bless/app/fam_02", "_self")};
function goUrl_23() { window.open( base_url + "bless/app/fam_03", "_self")};
function goUrl_24() { window.open( base_url + "bless/app/fam_04", "_self")};
function goUrl_25() { window.open( base_url + "bless/app/fam_05", "_self")};
function goUrl_26() { window.open( base_url + "bless/app/fam_06_0", "_self")};
function goUrl_27() { window.open( base_url + "bless/app/fam_07", "_self")};

function goUrl_28() { window.open( base_url + "bless/app/eng_00", "_self")};

function goUrl_29() { window.open( base_url + "bless/app/fam_10", "_self")};


// 2019.05.14 가정국요청 : 가정출발보고 분기 추가 By 하야시
function goUrl_26_1() { window.open( base_url + "bless/app/fam_06_1", "_self")};
function goUrl_26_2() { window.open( base_url + "bless/app/fam_06_2", "_self")};
function goUrl_26_3() { window.open( base_url + "bless/app/fam_06_3", "_self")};
function goUrl_26_4() { window.open( base_url + "bless/app/fam_06_4", "_self")};

function goUrl_31() { window.open( base_url + "certificate/work","_self")};
function goUrl_32() { window.open( base_url + "certificate/attache","_self")};
function goUrl_33() { window.open( base_url + "certificate/career ","_self")};
function goUrl_34() { window.open( base_url + "certificate/leader","_self")};
function goUrl_35() { window.open( base_url + "certificate/seal","_self")};
function goUrl_36() { window.open( base_url + "certificate/donation","_self")};
function goUrl_37() { window.open( base_url + "certificate/bill","_self")};
function goUrl_38() { window.open( base_url + "certificate/retire","_self")};     //퇴직증명서


function goUrl_41() { window.open( base_url + "minister/medical","_self")};
function goUrl_42() { window.open( base_url + "minister/scholarship","_self")};
function goUrl_43() { window.open( base_url + "minister/chupgrade","_self")};

function goUrl_51() { window.open( base_url + "donation/week","_self")};
function goUrl_52() { window.open( base_url + "donation/specail","_self")};
function goUrl_53() { window.open( base_url + "donation/family","_self")};
function goUrl_54() { window.open( base_url + "donation/offering04","_self")};     //미혼축복준비금
function goUrl_55() { window.open( base_url + "donation/offering05","_self")};		//영육축복헌금

function goUrl_61() { window.open( base_url + "board/b-a-1","_self")};
function goUrl_62() { window.open( base_url + "board/b-a-2","_self")};
function goUrl_63() { window.open( base_url + "customer/addr","_self")};           //교회주소록 추가예정
function goUrl_64() { window.open( base_url + "customer/report","_self")};		    //활동소식

function goUrl_71() { window.open( base_url + "mypage/minwon","_self")};			//나의민원
function goUrl_72() { window.open( base_url + "mypage/certificate","_self")};		//증명서발급
function goUrl_73() { window.open( base_url + "mypage/payment","_self")};			//결제내역
function goUrl_74() { window.open( base_url + "login/usage","_self")};				//사용신청
function goUrl_75() { window.open( base_url + "mypage/report","_self")};		    //마이활동보고
function goUrl_76() { window.open( base_url + "mypage/chdonationcart","_self")};	//교회헌금내역
function goUrl_77() { window.open( base_url + "login/personinfo","_self")};			//개인정보수정
//rename (2019-05-13)
function goUrl_78() { window.open( base_url + "login/rename_by_church","_self")};				//이름변경
function goUrl_79() { window.open( base_url + "login/resettingfather_by_church","_self")};	//아버지 변경
function goUrl_80() { window.open( base_url + "login/resettingmother_by_church","_self")};	//어머니 변경
function goUrl_81() { window.open( base_url + "login/resp_by_church","_self")};	//믿음의부모 변경
function goUrl_82() { window.open( base_url + "Bless_kim/resettingblessing_by_church","_self")};	//축복정보 변경
function goUrl_83() { window.open( base_url + "Bless_kim/resettingparents_by_church","_self")};	//부모정보 변경
 
function goUrl_91() { window.open( base_url + "etc/privacy","_self")};				//개인정보 처리방침
function goUrl_92() { window.open( base_url + "etc/email","_self")};				//이메일 무단수집거부
function goUrl_93() { window.open( base_url + "etc/map","_self")};					//찾아오시는 길



/* 텍스트탭 */
function getElementsByClassName(chkName,parentNode) {
	var arr = new Array();
	if (parentNode == null) {
		var elems = document.getElementsByTagName("*");
	} else {
		var elems = parentNode.getElementsByTagName("*");
	}
	for ( var chk, i = 0; ( elem = elems[i] ); i++ ) {
		if ( elem.className == chkName ) {
			arr[arr.length] = elem;
		}
	}
	return arr;
}
function tabDisplay(tab,content,num,chk,over,type) {
	for (var i=0; i<content.length; i++) {
		tab[i].className = '';
		tab[num].className = chk;
		content[i].style.display = 'none';
		content[num].style.display = 'block';
	}
}
function tabAct(tab,content,num,chk,over,type) {
	tab[num].onclick = function() {
		tabDisplay(tab,content,num,chk);
		return false;
	}
	if (type == true) {
		tab[num].onmouseover = function() {
			if (this.className != chk) {
				this.className = over;
			}
		}
		tab[num].onmouseout = function() {
			if (this.className == over) {
				this.className = '';
			}
		}
	}
}



/******* lnb ***********/

function initlnb() {
  $('#lnb ul').hide();
  $('#lnb ul').children('.current').parent().show();
  //$('#lnb ul:first').show();
  $('#lnb li a').click(
    function() {
      var checkElement = $(this).next();
      if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
        return false;
        }
      if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
        $('#lnb ul:visible').slideUp('normal');
        checkElement.slideDown('normal');
        return false;
        }
      }
    );
  }
$(document).ready(function() {initlnb();});


/******* // lnb ***********/







/*퀵 탑버튼*/

$(document).ready(function(){
	$("#back-to-top").hide();
	$(function () {
		$(window).scroll(function(){
		if ($(window).scrollTop()>100){
		$("#back-to-top").fadeIn(500);
		}
		else
		{
		$("#back-to-top").fadeOut(500);
		}
		});
		//back to top
		$("#back-to-top li.goTop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
		});
	});
});

/* // 퀵 탑버튼*/