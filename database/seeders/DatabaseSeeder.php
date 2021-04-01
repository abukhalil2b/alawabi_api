<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
			'name'=>'إبراهيم',
			'email'=>'abukhalil2b@gmail.com',
			'password'=>Hash::make('El200@200')
		]);

        $students = [
  ['phone' => '71010771','password' => '71010771'],
  ['phone' => '71151815','password' => '71151815'],
  ['phone' => '71179293','password' => '71179293'],
  ['phone' => '71510715','password' => '71510715'],
  ['phone' => '71512007','password' => '71512007'],
  ['phone' => '71587993','password' => '71587993'],
  ['phone' => '72195760','password' => '72195760'],
  ['phone' => '72461636','password' => '72461636'],
  ['phone' => '72607442','password' => '72607442'],
  ['phone' => '72611513','password' => '72611513'],
  ['phone' => '79047697','password' => '79047697'],
  ['phone' => '79054143','password' => '79054143'],
  ['phone' => '79076968','password' => '79076968'],
  ['phone' => '79177197','password' => '79177197'],
  ['phone' => '79197205','password' => '79197205'],
  ['phone' => '79390814','password' => '79390814'],
  ['phone' => '90110042','password' => '90110042'],
  ['phone' => '90142463','password' => '90142463'],
  ['phone' => '90169992','password' => '90169992'],
  ['phone' => '90185938','password' => '90185938'],
  ['phone' => '90185959','password' => '90185959'],
  ['phone' => '90188760','password' => '90188760'],
  ['phone' => '90740509','password' => '90740509'],
  ['phone' => '90762387','password' => '90762387'],
  ['phone' => '90912905','password' => '90912905'],
  ['phone' => '90948502','password' => '90948502'],
  ['phone' => '90979452','password' => '90979452'],
  ['phone' => '90993991','password' => '90993991'],
  ['phone' => '91000318','password' => '91000318'],
  ['phone' => '91101041','password' => '91101041'],
  ['phone' => '91112611','password' => '91112611'],
  ['phone' => '91116368','password' => '91116368'],
  ['phone' => '91132296','password' => '91132296'],
  ['phone' => '91153556','password' => '91153556'],
  ['phone' => '91161442','password' => '91161442'],
  ['phone' => '91163059','password' => '91163059'],
  ['phone' => '91170995','password' => '91170995'],
  ['phone' => '91171423','password' => '91171423'],
  ['phone' => '91172099','password' => '91172099'],
  ['phone' => '91217921','password' => '91217921'],
  ['phone' => '91237999','password' => '91237999'],
  ['phone' => '91262150','password' => '91262150'],
  ['phone' => '91282072','password' => '91282072'],
  ['phone' => '91308299','password' => '91308299'],
  ['phone' => '91308694','password' => '91308694'],
  ['phone' => '91319388','password' => '91319388'],
  ['phone' => '91331423','password' => '91331423'],
  ['phone' => '91333907','password' => '91333907'],
  ['phone' => '91350289','password' => '91350289'],
  ['phone' => '91378499','password' => '91378499'],
  ['phone' => '91480851','password' => '91480851'],
  ['phone' => '91499066','password' => '91499066'],
  ['phone' => '91499433','password' => '91499433'],
  ['phone' => '91701713','password' => '91701713'],
  ['phone' => '91716725','password' => '91716725'],
  ['phone' => '91750013','password' => '91750013'],
  ['phone' => '91751443','password' => '91751443'],
  ['phone' => '91795357','password' => '91795357'],
  ['phone' => '91814140','password' => '91814140'],
  ['phone' => '91915459','password' => '91915459'],
  ['phone' => '91922883','password' => '91922883'],
  ['phone' => '91953755','password' => '91953755'],
  ['phone' => '91984971','password' => '91984971'],
  ['phone' => '91993484','password' => '91993484'],
  ['phone' => '91993488','password' => '91993488'],
  ['phone' => '91994662','password' => '91994662'],
  ['phone' => '92004497','password' => '92004497'],
  ['phone' => '92017470','password' => '92017470'],
  ['phone' => '92038871','password' => '92038871'],
  ['phone' => '92050092','password' => '92050092'],
  ['phone' => '92057406','password' => '92057406'],
  ['phone' => '92062061','password' => '92062061'],
  ['phone' => '92068503','password' => '92068503'],
  ['phone' => '92087885','password' => '92087885'],
  ['phone' => '92094798','password' => '92094798'],
  ['phone' => '92100741','password' => '92100741'],
  ['phone' => '92118461','password' => '92118461'],
  ['phone' => '92122756','password' => '92122756'],
  ['phone' => '92126631','password' => '92126631'],
  ['phone' => '92127247','password' => '92127247'],
  ['phone' => '92129580','password' => '92129580'],
  ['phone' => '92134366','password' => '92134366'],
  ['phone' => '92137224','password' => '92137224'],
  ['phone' => '92140604','password' => '92140604'],
  ['phone' => '92166778','password' => '92166778'],
  ['phone' => '92169333','password' => '92169333'],
  ['phone' => '92180955','password' => '92180955'],
  ['phone' => '92181550','password' => '92181550'],
  ['phone' => '92182091','password' => '92182091'],
  ['phone' => '92189444','password' => '92189444'],
  ['phone' => '92194474','password' => '92194474'],
  ['phone' => '92204337','password' => '92204337'],
  ['phone' => '92204557','password' => '92204557'],
  ['phone' => '92204665','password' => '92204665'],
  ['phone' => '92210291','password' => '92210291'],
  ['phone' => '92219015','password' => '92219015'],
  ['phone' => '92219153','password' => '92219153'],
  ['phone' => '92221915','password' => '92221915'],
  ['phone' => '92221932','password' => '92221932'],
  ['phone' => '92224554','password' => '92224554'],
  ['phone' => '92232767','password' => '92232767'],
  ['phone' => '92242599','password' => '92242599'],
  ['phone' => '92248998','password' => '92248998'],
  ['phone' => '92257046','password' => '92257046'],
  ['phone' => '92262601','password' => '92262601'],
  ['phone' => '92266751','password' => '92266751'],
  ['phone' => '92267092','password' => '92267092'],
  ['phone' => '92269031','password' => '92269031'],
  ['phone' => '92271301','password' => '92271301'],
  ['phone' => '92273110','password' => '92273110'],
  ['phone' => '92275167','password' => '92275167'],
  ['phone' => '92277484','password' => '92277484'],
  ['phone' => '92280222','password' => '92280222'],
  ['phone' => '92282207','password' => '92282207'],
  ['phone' => '92294693','password' => '92294693'],
  ['phone' => '92295213','password' => '92295213'],
  ['phone' => '92300162','password' => '92300162'],
  ['phone' => '92305698','password' => '92305698'],
  ['phone' => '92320303','password' => '92320303'],
  ['phone' => '92341871','password' => '92341871'],
  ['phone' => '92355061','password' => '92355061'],
  ['phone' => '92365378','password' => '92365378'],
  ['phone' => '92376784','password' => '92376784'],
  ['phone' => '92380538','password' => '92380538'],
  ['phone' => '92385330','password' => '92385330'],
  ['phone' => '92390426','password' => '92390426'],
  ['phone' => '92390942','password' => '92390942'],
  ['phone' => '92396475','password' => '92396475'],
  ['phone' => '92396578','password' => '92396578'],
  ['phone' => '92398658','password' => '92398658'],
  ['phone' => '92420254','password' => '92420254'],
  ['phone' => '92420258','password' => '92420258'],
  ['phone' => '92428203','password' => '92428203'],
  ['phone' => '92430650','password' => '92430650'],
  ['phone' => '92446812','password' => '92446812'],
  ['phone' => '92446893','password' => '92446893'],
  ['phone' => '92454145','password' => '92454145'],
  ['phone' => '92460045','password' => '92460045'],
  ['phone' => '92479116','password' => '92479116'],
  ['phone' => '92488110','password' => '92488110'],
  ['phone' => '92502548','password' => '92502548'],
  ['phone' => '92514559','password' => '92514559'],
  ['phone' => '92520052','password' => '92520052'],
  ['phone' => '92529339','password' => '92529339'],
  ['phone' => '92545391','password' => '92545391'],
  ['phone' => '92545564','password' => '92545564'],
  ['phone' => '92551260','password' => '92551260'],
  ['phone' => '92553322','password' => '92553322'],
  ['phone' => '92554799','password' => '92554799'],
  ['phone' => '92556052','password' => '92556052'],
  ['phone' => '92558909','password' => '92558909'],
  ['phone' => '92580533','password' => '92580533'],
  ['phone' => '92597088','password' => '92597088'],
  ['phone' => '92601224','password' => '92601224'],
  ['phone' => '92624449','password' => '92624449'],
  ['phone' => '92633416','password' => '92633416'],
  ['phone' => '92643286','password' => '92643286'],
  ['phone' => '92653138','password' => '92653138'],
  ['phone' => '92658555','password' => '92658555'],
  ['phone' => '92661771','password' => '92661771'],
  ['phone' => '92668184','password' => '92668184'],
  ['phone' => '92668662','password' => '92668662'],
  ['phone' => '92672122','password' => '92672122'],
  ['phone' => '92676965','password' => '92676965'],
  ['phone' => '92686321','password' => '92686321'],
  ['phone' => '92691978','password' => '92691978'],
  ['phone' => '92696825','password' => '92696825'],
  ['phone' => '92702716','password' => '92702716'],
  ['phone' => '92722228','password' => '92722228'],
  ['phone' => '92722405','password' => '92722405'],
  ['phone' => '92732347','password' => '92732347'],
  ['phone' => '92751214','password' => '92751214'],
  ['phone' => '92765866','password' => '92765866'],
  ['phone' => '92776922','password' => '92776922'],
  ['phone' => '92792641','password' => '92792641'],
  ['phone' => '92805189','password' => '92805189'],
  ['phone' => '92811341','password' => '92811341'],
  ['phone' => '92830715','password' => '92830715'],
  ['phone' => '92863661','password' => '92863661'],
  ['phone' => '92871814','password' => '92871814'],
  ['phone' => '92884885','password' => '92884885'],
  ['phone' => '92905470','password' => '92905470'],
  ['phone' => '92925563','password' => '92925563'],
  ['phone' => '92932865','password' => '92932865'],
  ['phone' => '92939228','password' => '92939228'],
  ['phone' => '92941677','password' => '92941677'],
  ['phone' => '92950493','password' => '92950493'],
  ['phone' => '92995750','password' => '92995750'],
  ['phone' => '93091010','password' => '93091010'],
  ['phone' => '93231541','password' => '93231541'],
  ['phone' => '93249550','password' => '93249550'],
  ['phone' => '93261385','password' => '93261385'],
  ['phone' => '93318809','password' => '93318809'],
  ['phone' => '93330399','password' => '93330399'],
  ['phone' => '93331150','password' => '93331150'],
  ['phone' => '93331310','password' => '93331310'],
  ['phone' => '93337269','password' => '93337269'],
  ['phone' => '93338398','password' => '93338398'],
  ['phone' => '93339566','password' => '93339566'],
  ['phone' => '93348806','password' => '93348806'],
  ['phone' => '93359258','password' => '93359258'],
  ['phone' => '93363749','password' => '93363749'],
  ['phone' => '93366822','password' => '93366822'],
  ['phone' => '93399325','password' => '93399325'],
  ['phone' => '93525250','password' => '93525250'],
  ['phone' => '93525276','password' => '93525276'],
  ['phone' => '93525277','password' => '93525277'],
  ['phone' => '93537519','password' => '93537519'],
  ['phone' => '93541334','password' => '93541334'],
  ['phone' => '93551515','password' => '93551515'],
  ['phone' => '93562223','password' => '93562223'],
  ['phone' => '93583889','password' => '93583889'],
  ['phone' => '93630385','password' => '93630385'],
  ['phone' => '93633402','password' => '93633402'],
  ['phone' => '93635344','password' => '93635344'],
  ['phone' => '93642520','password' => '93642520'],
  ['phone' => '93648879','password' => '93648879'],
  ['phone' => '93660130','password' => '93660130'],
  ['phone' => '93674464','password' => '93674464'],
  ['phone' => '93677922','password' => '93677922'],
  ['phone' => '93689727','password' => '93689727'],
  ['phone' => '93692004','password' => '93692004'],
  ['phone' => '93693606','password' => '93693606'],
  ['phone' => '93806087','password' => '93806087'],
  ['phone' => '93816823','password' => '93816823'],
  ['phone' => '93816845','password' => '93816845'],
  ['phone' => '93822223','password' => '93822223'],
  ['phone' => '93880122','password' => '93880122'],
  ['phone' => '93884228','password' => '93884228'],
  ['phone' => '93888726','password' => '93888726'],
  ['phone' => '93917142','password' => '93917142'],
  ['phone' => '93922628','password' => '93922628'],
  ['phone' => '93930603','password' => '93930603'],
  ['phone' => '93939991','password' => '93939991'],
  ['phone' => '93943361','password' => '93943361'],
  ['phone' => '93944369','password' => '93944369'],
  ['phone' => '93949669','password' => '93949669'],
  ['phone' => '93952934','password' => '93952934'],
  ['phone' => '93974229','password' => '93974229'],
  ['phone' => '93975742','password' => '93975742'],
  ['phone' => '94063449','password' => '94063449'],
  ['phone' => '94092213','password' => '94092213'],
  ['phone' => '94137202','password' => '94137202'],
  ['phone' => '94150102','password' => '94150102'],
  ['phone' => '94168811','password' => '94168811'],
  ['phone' => '94233374','password' => '94233374'],
  ['phone' => '94233828','password' => '94233828'],
  ['phone' => '94237373','password' => '94237373'],
  ['phone' => '94249060','password' => '94249060'],
  ['phone' => '94284377','password' => '94284377'],
  ['phone' => '94360861','password' => '94360861'],
  ['phone' => '94373667','password' => '94373667'],
  ['phone' => '94422208','password' => '94422208'],
  ['phone' => '94438500','password' => '94438500'],
  ['phone' => '94443714','password' => '94443714'],
  ['phone' => '94464459','password' => '94464459'],
  ['phone' => '94473931','password' => '94473931'],
  ['phone' => '94474185','password' => '94474185'],
  ['phone' => '94477744','password' => '94477744'],
  ['phone' => '94490734','password' => '94490734'],
  ['phone' => '94542288','password' => '94542288'],
  ['phone' => '94566789','password' => '94566789'],
  ['phone' => '94566815','password' => '94566815'],
  ['phone' => '94657568','password' => '94657568'],
  ['phone' => '94762225','password' => '94762225'],
  ['phone' => '94848150','password' => '94848150'],
  ['phone' => '94848418','password' => '94848418'],
  ['phone' => '94927078','password' => '94927078'],
  ['phone' => '95030171','password' => '95030171'],
  ['phone' => '95057880','password' => '95057880'],
  ['phone' => '95062743','password' => '95062743'],
  ['phone' => '95069806','password' => '95069806'],
  ['phone' => '95070223','password' => '95070223'],
  ['phone' => '95078262','password' => '95078262'],
  ['phone' => '95090542','password' => '95090542'],
  ['phone' => '95096433','password' => '95096433'],
  ['phone' => '95142926','password' => '95142926'],
  ['phone' => '95148848','password' => '95148848'],
  ['phone' => '95151598','password' => '95151598'],
  ['phone' => '95161019','password' => '95161019'],
  ['phone' => '95171047','password' => '95171047'],
  ['phone' => '95198870','password' => '95198870'],
  ['phone' => '95203686','password' => '95203686'],
  ['phone' => '95204218','password' => '95204218'],
  ['phone' => '95215328','password' => '95215328'],
  ['phone' => '95223622','password' => '95223622'],
  ['phone' => '95253943','password' => '95253943'],
  ['phone' => '95253966','password' => '95253966'],
  ['phone' => '95273017','password' => '95273017'],
  ['phone' => '95288584','password' => '95288584'],
  ['phone' => '95295234','password' => '95295234'],
  ['phone' => '95300507','password' => '95300507'],
  ['phone' => '95304475','password' => '95304475'],
  ['phone' => '95309203','password' => '95309203'],
  ['phone' => '95368256','password' => '95368256'],
  ['phone' => '95370970','password' => '95370970'],
  ['phone' => '95377689','password' => '95377689'],
  ['phone' => '95377695','password' => '95377695'],
  ['phone' => '95377844','password' => '95377844'],
  ['phone' => '95388537','password' => '95388537'],
  ['phone' => '95395139','password' => '95395139'],
  ['phone' => '95413663','password' => '95413663'],
  ['phone' => '95438184','password' => '95438184'],
  ['phone' => '95438818','password' => '95438818'],
  ['phone' => '95461119','password' => '95461119'],
  ['phone' => '95463799','password' => '95463799'],
  ['phone' => '95481290','password' => '95481290'],
  ['phone' => '95492335','password' => '95492335'],
  ['phone' => '95518998','password' => '95518998'],
  ['phone' => '95526336','password' => '95526336'],
  ['phone' => '95547570','password' => '95547570'],
  ['phone' => '95571399','password' => '95571399'],
  ['phone' => '95571730','password' => '95571730'],
  ['phone' => '95571771','password' => '95571771'],
  ['phone' => '95577057','password' => '95577057'],
  ['phone' => '95588053','password' => '95588053'],
  ['phone' => '95597723','password' => '95597723'],
  ['phone' => '95622479','password' => '95622479'],
  ['phone' => '95623131','password' => '95623131'],
  ['phone' => '95648303','password' => '95648303'],
  ['phone' => '95650649','password' => '95650649'],
  ['phone' => '95662382','password' => '95662382'],
  ['phone' => '95696808','password' => '95696808'],
  ['phone' => '95720153','password' => '95720153'],
  ['phone' => '95740924','password' => '95740924'],
  ['phone' => '95744955','password' => '95744955'],
  ['phone' => '95755961','password' => '95755961'],
  ['phone' => '95767365','password' => '95767365'],
  ['phone' => '95775225','password' => '95775225'],
  ['phone' => '95776672','password' => '95776672'],
  ['phone' => '95776678','password' => '95776678'],
  ['phone' => '95776743','password' => '95776743'],
  ['phone' => '95790908','password' => '95790908'],
  ['phone' => '95796608','password' => '95796608'],
  ['phone' => '95797914','password' => '95797914'],
  ['phone' => '95801322','password' => '95801322'],
  ['phone' => '95812695','password' => '95812695'],
  ['phone' => '95819405','password' => '95819405'],
  ['phone' => '95819549','password' => '95819549'],
  ['phone' => '95820200','password' => '95820200'],
  ['phone' => '95843355','password' => '95843355'],
  ['phone' => '95847300','password' => '95847300'],
  ['phone' => '95856988','password' => '95856988'],
  ['phone' => '95868917','password' => '95868917'],
  ['phone' => '95877442','password' => '95877442'],
  ['phone' => '95878078','password' => '95878078'],
  ['phone' => '95938010','password' => '95938010'],
  ['phone' => '95958681','password' => '95958681'],
  ['phone' => '95988804','password' => '95988804'],
  ['phone' => '96020718','password' => '96020718'],
  ['phone' => '96074643','password' => '96074643'],
  ['phone' => '96101510','password' => '96101510'],
  ['phone' => '96105761','password' => '96105761'],
  ['phone' => '96117490','password' => '96117490'],
  ['phone' => '96144611','password' => '96144611'],
  ['phone' => '96148233','password' => '96148233'],
  ['phone' => '96176406','password' => '96176406'],
  ['phone' => '96193403','password' => '96193403'],
  ['phone' => '96204445','password' => '96204445'],
  ['phone' => '96236698','password' => '96236698'],
  ['phone' => '96278443','password' => '96278443'],
  ['phone' => '96300313','password' => '96300313'],
  ['phone' => '96344457','password' => '96344457'],
  ['phone' => '96408090','password' => '96408090'],
  ['phone' => '96440806','password' => '96440806'],
  ['phone' => '96463807','password' => '96463807'],
  ['phone' => '96467162','password' => '96467162'],
  ['phone' => '96475489','password' => '96475489'],
  ['phone' => '96481617','password' => '96481617'],
  ['phone' => '96523203','password' => '96523203'],
  ['phone' => '96540232','password' => '96540232'],
  ['phone' => '96549889','password' => '96549889'],
  ['phone' => '96567992','password' => '96567992'],
  ['phone' => '96569773','password' => '96569773'],
  ['phone' => '96578056','password' => '96578056'],
  ['phone' => '96607128','password' => '96607128'],
  ['phone' => '96613939','password' => '96613939'],
  ['phone' => '96613994','password' => '96613994'],
  ['phone' => '96616234','password' => '96616234'],
  ['phone' => '96625263','password' => '96625263'],
  ['phone' => '96625906','password' => '96625906'],
  ['phone' => '96660157','password' => '96660157'],
  ['phone' => '96660158','password' => '96660158'],
  ['phone' => '96664441','password' => '96664441'],
  ['phone' => '96668859','password' => '96668859'],
  ['phone' => '96670513','password' => '96670513'],
  ['phone' => '96671098','password' => '96671098'],
  ['phone' => '96712244','password' => '96712244'],
  ['phone' => '96730799','password' => '96730799'],
  ['phone' => '96739748','password' => '96739748'],
  ['phone' => '96739759','password' => '96739759'],
  ['phone' => '96746745','password' => '96746745'],
  ['phone' => '96751625','password' => '96751625'],
  ['phone' => '96788998','password' => '96788998'],
  ['phone' => '96792804','password' => '96792804'],
  ['phone' => '96969674','password' => '96969674'],
  ['phone' => '96985159','password' => '96985159'],
  ['phone' => '96996617','password' => '96996617'],
  ['phone' => '97019100','password' => '97019100'],
  ['phone' => '97020790','password' => '97020790'],
  ['phone' => '97022878','password' => '97022878'],
  ['phone' => '97022892','password' => '97022892'],
  ['phone' => '97030848','password' => '97030848'],
  ['phone' => '97042223','password' => '97042223'],
  ['phone' => '97090269','password' => '97090269'],
  ['phone' => '97129973','password' => '97129973'],
  ['phone' => '97131554','password' => '97131554'],
  ['phone' => '97147491','password' => '97147491'],
  ['phone' => '97200076','password' => '97200076'],
  ['phone' => '97200793','password' => '97200793'],
  ['phone' => '97258295','password' => '97258295'],
  ['phone' => '97271523','password' => '97271523'],
  ['phone' => '97343922','password' => '97343922'],
  ['phone' => '97366434','password' => '97366434'],
  ['phone' => '97399081','password' => '97399081'],
  ['phone' => '97417806','password' => '97417806'],
  ['phone' => '97635755','password' => '97635755'],
  ['phone' => '97642296','password' => '97642296'],
  ['phone' => '97732828','password' => '97732828'],
  ['phone' => '97768850','password' => '97768850'],
  ['phone' => '97780850','password' => '97780850'],
  ['phone' => '98003609','password' => '98003609'],
  ['phone' => '98007391','password' => '98007391'],
  ['phone' => '98017664','password' => '98017664'],
  ['phone' => '98038225','password' => '98038225'],
  ['phone' => '98038582','password' => '98038582'],
  ['phone' => '98054510','password' => '98054510'],
  ['phone' => '98062861','password' => '98062861'],
  ['phone' => '98071075','password' => '98071075'],
  ['phone' => '98080334','password' => '98080334'],
  ['phone' => '98084440','password' => '98084440'],
  ['phone' => '98089370','password' => '98089370'],
  ['phone' => '98107620','password' => '98107620'],
  ['phone' => '98135136','password' => '98135136'],
  ['phone' => '98141480','password' => '98141480'],
  ['phone' => '98165750','password' => '98165750'],
  ['phone' => '98171804','password' => '98171804'],
  ['phone' => '98175051','password' => '98175051'],
  ['phone' => '98223030','password' => '98223030'],
  ['phone' => '98232283','password' => '98232283'],
  ['phone' => '98232292','password' => '98232292'],
  ['phone' => '98236237','password' => '98236237'],
  ['phone' => '98253633','password' => '98253633'],
  ['phone' => '98273434','password' => '98273434'],
  ['phone' => '98282307','password' => '98282307'],
  ['phone' => '98500332','password' => '98500332'],
  ['phone' => '98519227','password' => '98519227'],
  ['phone' => '98522291','password' => '98522291'],
  ['phone' => '98546925','password' => '98546925'],
  ['phone' => '98549966','password' => '98549966'],
  ['phone' => '98553330','password' => '98553330'],
  ['phone' => '98568636','password' => '98568636'],
  ['phone' => '98571354','password' => '98571354'],
  ['phone' => '98580258','password' => '98580258'],
  ['phone' => '98596887','password' => '98596887'],
  ['phone' => '98683070','password' => '98683070'],
  ['phone' => '98823995','password' => '98823995'],
  ['phone' => '98849008','password' => '98849008'],
  ['phone' => '98853856','password' => '98853856'],
  ['phone' => '98866378','password' => '98866378'],
  ['phone' => '98884392','password' => '98884392'],
  ['phone' => '98890598','password' => '98890598'],
  ['phone' => '98897721','password' => '98897721'],
  ['phone' => '98922589','password' => '98922589'],
  ['phone' => '98939404','password' => '98939404'],
  ['phone' => '98941244','password' => '98941244'],
  ['phone' => '98960703','password' => '98960703'],
  ['phone' => '98972262','password' => '98972262'],
  ['phone' => '98973509','password' => '98973509'],
  ['phone' => '98980990','password' => '98980990'],
  ['phone' => '98982989','password' => '98982989'],
  ['phone' => '98991616','password' => '98991616'],
  ['phone' => '98999144','password' => '98999144'],
  ['phone' => '99006261','password' => '99006261'],
  ['phone' => '99022806','password' => '99022806'],
  ['phone' => '99024081','password' => '99024081'],
  ['phone' => '99025065','password' => '99025065'],
  ['phone' => '99048977','password' => '99048977'],
  ['phone' => '99051130','password' => '99051130'],
  ['phone' => '99061767','password' => '99061767'],
  ['phone' => '99069598','password' => '99069598'],
  ['phone' => '99070902','password' => '99070902'],
  ['phone' => '99073218','password' => '99073218'],
  ['phone' => '99075828','password' => '99075828'],
  ['phone' => '99091552','password' => '99091552'],
  ['phone' => '99111205','password' => '99111205'],
  ['phone' => '99151292','password' => '99151292'],
  ['phone' => '99161488','password' => '99161488'],
  ['phone' => '99166466','password' => '99166466'],
  ['phone' => '99175506','password' => '99175506'],
  ['phone' => '99197904','password' => '99197904'],
  ['phone' => '99199426','password' => '99199426'],
  ['phone' => '99202001','password' => '99202001'],
  ['phone' => '99209408','password' => '99209408'],
  ['phone' => '99229569','password' => '99229569'],
  ['phone' => '99251595','password' => '99251595'],
  ['phone' => '99277388','password' => '99277388'],
  ['phone' => '99278883','password' => '99278883'],
  ['phone' => '99323433','password' => '99323433'],
  ['phone' => '99324625','password' => '99324625'],
  ['phone' => '99375844','password' => '99375844'],
  ['phone' => '99380760','password' => '99380760'],
  ['phone' => '99380890','password' => '99380890'],
  ['phone' => '99384280','password' => '99384280'],
  ['phone' => '99411716','password' => '99411716'],
  ['phone' => '99419309','password' => '99419309'],
  ['phone' => '99451484','password' => '99451484'],
  ['phone' => '99460647','password' => '99460647'],
  ['phone' => '99463158','password' => '99463158'],
  ['phone' => '99464575','password' => '99464575'],
  ['phone' => '99464711','password' => '99464711'],
  ['phone' => '99464862','password' => '99464862'],
  ['phone' => '99466892','password' => '99466892'],
  ['phone' => '99467085','password' => '99467085'],
  ['phone' => '99504282','password' => '99504282'],
  ['phone' => '99504660','password' => '99504660'],
  ['phone' => '99507041','password' => '99507041'],
  ['phone' => '99516889','password' => '99516889'],
  ['phone' => '99524035','password' => '99524035'],
  ['phone' => '99535737','password' => '99535737'],
  ['phone' => '99537355','password' => '99537355'],
  ['phone' => '99543796','password' => '99543796'],
  ['phone' => '99546166','password' => '99546166'],
  ['phone' => '99546808','password' => '99546808'],
  ['phone' => '99549518','password' => '99549518'],
  ['phone' => '99550646','password' => '99550646'],
  ['phone' => '99557818','password' => '99557818'],
  ['phone' => '99559231','password' => '99559231'],
  ['phone' => '99560874','password' => '99560874'],
  ['phone' => '99563310','password' => '99563310'],
  ['phone' => '99566893','password' => '99566893'],
  ['phone' => '99567145','password' => '99567145'],
  ['phone' => '99579505','password' => '99579505'],
  ['phone' => '99580114','password' => '99580114'],
  ['phone' => '99587366','password' => '99587366'],
  ['phone' => '99589442','password' => '99589442'],
  ['phone' => '99590793','password' => '99590793'],
  ['phone' => '99592352','password' => '99592352'],
  ['phone' => '99614478','password' => '99614478'],
  ['phone' => '99627842','password' => '99627842'],
  ['phone' => '99632532','password' => '99632532'],
  ['phone' => '99659815','password' => '99659815'],
  ['phone' => '99661590','password' => '99661590'],
  ['phone' => '99669763','password' => '99669763'],
  ['phone' => '99715236','password' => '99715236'],
  ['phone' => '99718251','password' => '99718251'],
  ['phone' => '99720463','password' => '99720463'],
  ['phone' => '99720914','password' => '99720914'],
  ['phone' => '99723032','password' => '99723032'],
  ['phone' => '99733319','password' => '99733319'],
  ['phone' => '99734057','password' => '99734057'],
  ['phone' => '99743374','password' => '99743374'],
  ['phone' => '99746125','password' => '99746125'],
  ['phone' => '99753411','password' => '99753411'],
  ['phone' => '99754006','password' => '99754006'],
  ['phone' => '99755201','password' => '99755201'],
  ['phone' => '99756694','password' => '99756694'],
  ['phone' => '99759028','password' => '99759028'],
  ['phone' => '99759662','password' => '99759662'],
  ['phone' => '99765521','password' => '99765521'],
  ['phone' => '99777505','password' => '99777505'],
  ['phone' => '99784043','password' => '99784043'],
  ['phone' => '99806501','password' => '99806501'],
  ['phone' => '99818155','password' => '99818155'],
  ['phone' => '99818401','password' => '99818401'],
  ['phone' => '99826236','password' => '99826236'],
  ['phone' => '99831003','password' => '99831003'],
  ['phone' => '99836862','password' => '99836862'],
  ['phone' => '99885245','password' => '99885245'],
  ['phone' => '99886676','password' => '99886676'],
  ['phone' => '99887732','password' => '99887732'],
  ['phone' => '99890254','password' => '99890254'],
  ['phone' => '99896286','password' => '99896286'],
  ['phone' => '99896494','password' => '99896494'],
  ['phone' => '99897941','password' => '99897941']
];

    foreach($students as $student){
        Student::create($student);
    }

    }


}
