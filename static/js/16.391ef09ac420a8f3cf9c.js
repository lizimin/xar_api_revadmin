webpackJsonp([16],{"97MU":function(t,e,a){"use strict";function s(t){a("urrB")}Object.defineProperty(e,"__esModule",{value:!0});var r=(a("NYxO"),a("wpcj")),n=a("3Lt7"),o=a("YxJB"),d=a("QTi7"),c={directives:{},components:{Qrcode:r.a,FlexboxItem:n.a,Flexbox:o.a,Box:d.a},name:"myvcard",data:function(){return{out_trade_no:"",use_record_list:[]}},computed:{},created:function(){this.out_trade_no=this.$route.query.out_trade_no,this.fetchData()},activated:function(){},deactivated:function(){},methods:{fetchData:function(){var t=this;t.xarpost("Vcard/getMyVcard",{out_trade_no:this.out_trade_no}).then(function(e){var a=e.data,s=e.error;e.message;0==s&&(t.use_record_list=a,console.log(a))})}}},i=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{attrs:{id:"myvcard"}},t._l(t.use_record_list,function(e){return a("box",{staticStyle:{"margin-top":"10px",padding:"0 10px","background-color":"#fff"}},[a("flexbox",{staticStyle:{padding:"5px"},attrs:{gutter:0,wrap:"wrap"}},[a("flexbox-item",{attrs:{span:.5}},[a("span",{staticClass:"des"},[t._v("消费时间：")])]),t._v(" "),a("flexbox-item",{attrs:{span:.5}},[a("div",{staticClass:"des-value"},[t._v("6666")])]),t._v(" "),a("flexbox-item",{attrs:{span:.5}},[a("span",{staticClass:"des"},[t._v("消费地点：")])]),t._v(" "),a("flexbox-item",{attrs:{span:.5}},[a("div",{staticClass:"des-value"},[t._v("777777776")])]),t._v(" "),a("flexbox-item",{attrs:{span:.5}},[a("span",{staticClass:"des"},[t._v("洗车卡编号：")])]),t._v(" "),a("flexbox-item",{attrs:{span:.5}},[a("div",{staticClass:"des-value"},[t._v("777777776")])]),t._v(" "),a("flexbox-item",{attrs:{span:.5}},[a("span",{staticClass:"des"},[t._v("剩余次数：")])]),t._v(" "),a("flexbox-item",{attrs:{span:.5}},[a("div",{staticClass:"des-value"},[t._v("777777776")])])],1)],1)}))},l=[],u={render:i,staticRenderFns:l},v=u,_=a("VU/8"),p=s,f=_(c,v,!1,p,"data-v-5becd1b8",null);e.default=f.exports},TrEd:function(t,e,a){e=t.exports=a("FZ+f")(!0),e.push([t.i,"\n.des[data-v-5becd1b8]{\n  color: #888888;\n}\n.des-value[data-v-5becd1b8]{\n  float: right;\n}\n","",{version:3,sources:["E:/work_space/HBudiler/wx_mall_my/src/view/vcard/useRecord.vue"],names:[],mappings:";AACA;EACE,eAAe;CAChB;AACD;EACE,aAAa;CACd",file:"useRecord.vue",sourcesContent:["\n.des[data-v-5becd1b8]{\n  color: #888888;\n}\n.des-value[data-v-5becd1b8]{\n  float: right;\n}\n"],sourceRoot:""}])},urrB:function(t,e,a){var s=a("TrEd");"string"==typeof s&&(s=[[t.i,s,""]]),s.locals&&(t.exports=s.locals);a("rjj0")("6230dc97",s,!0)}});
//# sourceMappingURL=16.391ef09ac420a8f3cf9c.js.map