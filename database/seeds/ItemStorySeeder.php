<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemStorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   DB::table('items')->insert([
    
[
'id' =>6,
'gender' => 2,
'items' => 'プラダの財布',
'story' => '恋人からのプレゼント。好きなものを選んでいいって言ってくれたけど、学生同士だし、気を遣う…でも、憧れのブランド！もらえてうれしい',
'price' => 50000,
'kind' => 4,
'item_brand' => 'プラダ　財布',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/culture/cabinet/1710-pic31/pr-1mh176qwaf0002_1.jpg'
],
[
'id' =>7,
'gender' => 2,
'items' => ' RMKのリップグロス',
'story' => 'おしゃれ好きなあの子へのプレゼント！予算もちょうどよし。',
'price' => 2000,
'kind' => 2,
'item_brand' => 'RMK　リップグロス',
'img_path'=>'https://tshop.r10s.jp/benavi/cabinet/06/rmk123006_1.jpg?downsize=250:*'
],
[
'id' =>8,
'gender' => 2,
'items' => ' gelato piqueのブランケット',
'story' => 'ふわふわ好き女子には間違いないブランド。ブランケットだとオフィスでも使えるし、かわいさも実用性もばっちり！',
'price' => 6000,
'kind' => 2,
'item_brand' => 'ジェラートピケ　ブランケット　レディース',
'img_path'=>'https://image.rakuten.co.jp/muselect/cabinet/item15/pmnt175918_1.jpg'
],
[
'id' =>9,
'gender' => 1,
'items' => '自転車ヘルメット',
'story' => '自転車が趣味なあの人に。アクティブな週末を過ごそう！',
'price' => 30000,
'kind' => 4,
'item_brand' => 'Specialized　自転車ヘルメット',
'img_path'=>'https://tshop.r10s.jp/jitensya-ousama/cabinet/bell/p-bell-hlmt128.jpg'
],
[
'id' =>10,
'gender' => 2,
'items' => 'kate spadeの定期入れ',
'story' => '定期入れはいつも持ち歩くものだし、実用性もあるからうれしかった！！だけど、色があんまり好きじゃなかったなー。いつも持ち歩くものだからこそ、色やデザインは重要かも！！相手が好きな色や似合いそうなデザインをチェックしてみて！',
'price' => 10000,
'kind' => 4,
'item_brand' => 'ケイトスペード　定期入れ',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/marcoplus/cabinet/katespade/wallet/imgrc0081451504.jpg'
],
[
'id' =>14,
'gender' => 2,
'items' => 'スチームアイロン',
'story' => 'アイロン台を使わずにアイロンがけが出来るアイテム。ずっと欲しいと言っていたものを覚えてプレゼントしてくれた。',
'price' => 3000,
'kind' => 2,
'item_brand' => 'スチームアイロン',
'img_path'=>'https://tshop.r10s.jp/r-kojima/cabinet/280/3398807_01l.jpg'
],
[
'id' =>15,
'gender' => 2,
'items' => 'kate spadeの定期入れ',
'story' => '二十歳になった妹へ。可愛いけれど大人の物を使ってね♪',
'price' => 10000,
'kind' => 5,
'item_brand' => 'ケイトスペード　定期入れ',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/marcoplus/cabinet/katespade/wallet/imgrc0081451504.jpg'
],
[
'id' =>16,
'gender' => 2,
'items' => 'Starbucks Coffeeのカード',
'story' => 'いつも頑張っているご褒美にと突然仲のいい先輩がくれたプレゼント。ちょっと頑張った日には、このカードでおいしいフラペチーノでも飲んじゃおう。',
'price' => 1000,
'kind' => 2,
'item_brand' => 'スタバカード',
'img_path'=>'https://tshop.r10s.jp/mtony/cabinet/04010877/imgrc0066821483.jpg'
],
[
'id' =>17,
'gender' => 1,
'items' => 'ギターのピック',
'story' => 'いつも使っているスターウォーズのピックを持ち歩けるように！',
'price' => 1000,
'kind' => 5,
'item_brand' =>'ギター　ピック',
'img_path'=>'https://tshop.r10s.jp/chuya-online/cabinet/set5000/s4827.jpg'
],
[
'id' =>18,
'gender' => 1,
'items' => 'Knotの時計',
'story' => '恋人とのプレゼント交換では、あえて「これが欲しい！」ではなく、「あったらうれしいもの」をリクエスト。 自分に合うデザインなどを考えて選んでくれるのがうれしい。',
'price' => 15000,
'kind' => 4,
'item_brand' => 'ノット　時計',
'img_path'=>'https://tshop.r10s.jp/knot-watch/cabinet/face/cs-36rgwh.jpg'
],
[
'id' =>19,
'gender' => 2,
'items' => ' THREEのアイシャドウ',
'story' => '人気ブランドのコスメは間違いなし！さりげなくほしい色や似合う色を探してみると◎',
'price' => 5000,
'kind' => 3,
'item_brand' => 'THREE　アイシャドウ',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/blanc-lapin/cabinet/item/tre/trejs0500002.jpg'
],
[
'id' =>20,
'gender' => 2,
'items' => 'お花',
'story' => '就職祝いに幼馴染からお花のプレゼント。いつものようにご飯に行ったらサプライズで用意してくれてた。',
'price' => 1000,
'kind' => 2,
'item_brand' => '生花',
'img_path'=>'https://tshop.r10s.jp/noi-flower-regalo/cabinet/seikaarrange/seikaarrangeiowai/oiwai3/imgrc0070488969.jpg'
],
[
'id' =>21,
'gender' => 1,
'items' => '惑星ショコラ',
'story' => 'デザイン性のあるおしゃれなチョコレート。男友達へのバレンタインに',
'price' => 4000,
'kind' => 3,
'item_brand' => '惑星ショコラ',
'img_path'=>'https://tshop.r10s.jp/rihga/cabinet/leclat/lws-32_3.jpg'
],
[
'id' =>22,
'gender' => 2,
'items' => 'ワイヤレスイヤホン',
'story' => '実用性抜群！！とても嬉しかった！！！！',
'price' => 18000,
'kind' => 4,
'item_brand' => 'airpods',
'img_path'=>'https://tshop.r10s.jp/finebookpremiere/cabinet/imgrc0068961580.jpg'
],
[
'id' =>23,
'gender' => 1,
'items' => '名前入りのボールペン',
'story' => '相手の趣味が分からなくても、ビジネスで使えるものなら間違いなし！名前入りで特別感を',
'price' => 3000,
'kind' => 2,
'item_brand' => '名前入り ボールペン',
'img_path'=>'https://tshop.r10s.jp/bellevie-shop/cabinet/etc_image2/500etc0162sa1_1710.jpg'
],
[
'id' =>25,
'gender' => 1,
'items' => 'Paul Smithの名刺入れ',
'story' => '社会人には嬉しいプレゼント。いくつあっても嬉しいもの',
'price' => 10000,
'kind' => 4,
'item_brand' =>'ポールスミス　名刺入れ',
'img_path'=>'https://image.rakuten.co.jp/auc-season/cabinet/mens/menothers01/menpurse01/60-w1576_1.jpg'
],
[
'id' =>26,
'gender' => 2,
'items' => 'ヴィンテージのネックレス',
'story' => '母親が使っていたネックレスをもらった。新しいものをもらうのも嬉しいけど、思いのこもったものもうれしい。大切にしたい。',
'price' => 99999999,
'kind' => 5,
'item_brand' => 'ヴィンテージ　ネックレス',
'img_path'=>'https://tshop.r10s.jp/fairytale/cabinet/0913-17.jpg'
],
[
'id' =>27,
'gender' => 1,
'items' => 'PCに挟めるミニ扇風機',
'story' => '会社の先輩へ。これから夏だし、爽やかなものを♪',
'price' => 2000,
'kind' => 2,
'item_brand' => 'PC 扇風機',
'img_path'=>'https://tshop.r10s.jp/n-atoz/cabinet/pic13/13-8-n2/13-8-268_01.jpg'
],
[
'id' =>28,
'gender' => 2,
'items' => 'FURLAのバッグ',
'story' => 'バックはやっぱり実用性抜群だし、うれしい。今でも、毎日通勤で使ってます。',
'price' => 30000,
'kind' => 4,
'item_brand' => 'フルラ　バッグ',
'img_path'=>'https://image.rakuten.co.jp/x-sell/cabinet/newbag/1503/40517384.jpg'
],
[
'id' =>29,
'gender' => 2,
'items' => 'プリザーブドフラワー',
'story' => '最近引っ越した友人へ。小さくてもお家が華やかになるものを贈りたい',
'price' => 4000,
'kind' => 3,
'item_brand' => 'プリザーブドフラワー',
'img_path'=>'https://tshop.r10s.jp/snowball/cabinet/item4/a00154-02.jpg'
],
[
'id' =>30,
'gender' => 1,
'items' => 'PRADAのキーケース',
'story' => '普段はブランド物には疎い自分。いつもボロボロもキーケースを使っているのに気づいてくれた恋人があえてブランド物のキーケースを。とても嬉しかった。',
'price' => 20000,
'kind' => 4,
'item_brand' => 'プラダ　キーケース',
'img_path'=>'https://tshop.r10s.jp/bighit/cabinet/pr3/pro1pg222-o01-1.jpg'
],
[
'id' =>31,
'gender' => 2,
'items' => 'kate spadeのピアス',
'story' => 'Katespade好きな友達に、部活のみんなで協力してプレゼント！',
'price' => 8000,
'kind' => 2,
'item_brand' => 'ケイトスペード　ピアス',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/culture/cabinet/1702-pic21/ks-fo0ru1342-001_1.jpg'
],
[
'id' =>32,
'gender' => 1,
'items' => 'RALPH LAURENのキーホルダー',
'story' => '大学の卒業祝いに。自分のことを思って選んでくれたのがうれしい。',
'price' => 5000,
'kind' => 4,
'item_brand' => 'ラルフローレン　キーホルダー',
'img_path'=>'https://tshop.r10s.jp/slyder/cabinet/00764358/01404689/imgrc0071200109.jpg'
],
[
'id' =>33,
'gender' => 1,
'items' => 'バランスディスク',
'story' => '体を鍛えるのが好きな人にピッタリ！実際に使っている人の評判も◎',
'price' => 5000,
'kind' => 5,
'item_brand' => 'バランスディスク',
'img_path'=>'https://tshop.r10s.jp/jism/cabinet/0364/4986147327513.jpg'
],
[
'id' =>34,
'gender' => 2,
'items' => 'ハンカチ',
'story' => '大学の卒業祝いに。',
'price' => 1000,
'kind' => 2,
'item_brand' => 'ハンカチ　レディースhttps://tshop.r10s.jp/bugyo/cabinet/lezar/pen_10574.jpg?fitin=275:275',
'img_path'=>'https://tshop.r10s.jp/acrop/cabinet/05280295/imgrc0074988590.jpg'
],
[
'id' =>35,
'gender' => 2,
'items' => 'Paul Smithの定期入れ',
'story' => 'これから就活をする、Paul Smith好きな彼女へ。派手すぎず地味すぎないものが嬉しい！',
'price' => 20000,
'kind' => 4,
'item_brand' => 'ポールスミス　定期入れ　レディース',
'img_path'=>'https://image.rakuten.co.jp/inspiration/cabinet/2014-0421/pwu310-71a.jpg'
],
[
'id' =>36,
'gender' => 2,
'items' => 'PRADAの財布',
'story' => 'プレゼント選びは難しいから、一緒に買いに行くスタイル。ちょっと予算オーバーだったけど、買ってくれた。大切に使ってます。',
'price' => 35000,
'kind' => 4,
'item_brand' => 'プラダ　財布',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/brstring/cabinet/prada-2/gpr1ml522qhhf0002-1.jpg'
],
[
'id' =>37,
'gender' => 1,
'items' => 'adidasのスニーカー',
'story' => '履きつぶしたスニーカー、そろそろ替え時かも!?　こっそりサイズを調べてプレゼントしよう！',
'price' => 15000,
'kind' => 4,
'item_brand' => 'アディダス　スニーカー　メンズ',
'img_path'=>'https://image.rakuten.co.jp/kutsu-collection/cabinet/1/10/1002/10020325-1.jpg'
],
[
'id' =>38,
'gender' => 1,
'items' => '名前入りボールペン',
'story' => '仕事で使えるし、とっても気にしている。',
'price' => 3000,
'kind' => 2,
'item_brand' => '名前入りボールペン',
'img_path'=>'https://tshop.r10s.jp/bugyo/cabinet/lezar/pen_10574.jpg'
],
[
'id' =>39,
'gender' => 2,
'items' => 'Royal Copenhagenのマグカップ',
'story' => '初任給のプレゼントに♥英国ブランドで優雅なティータイムを！',
'price' => 7000,
'kind' => 5,
'item_brand' => 'ロイヤルコペンハーゲン　マグカップ',
'img_path'=>'https://tshop.r10s.jp/alevel/cabinet/royal/2381043.jpg'
],
[
'id' =>40,
'gender' => 1,
'items' => 'アルバム',
'story' => 'なんでもない日にアルバムのプレゼント。特別じゃない日のプレゼントってうれしい。',
'price' => 1000,
'kind' => 2,
'item_brand' => 'アルバム',
'img_path'=>'https://tshop.r10s.jp/zakkashop/cabinet/imagebox23/19564-1-s.jpg'
],
[
'id' =>41,
'gender' => 2,
'items' => 'ADDICTIONのコスメ',
'story' => '自分がもらっても嬉しいものをあげたい！おしゃれなコスメなら間違いなし',
'price' => 5000,
'kind' => 3,
'item_brand' => 'アディクション　コスメ',
'img_path'=>'https://tshop.r10s.jp/net-pumpkin/cabinet/70/4971710479270_1.jpg'
],
[
'id' =>42,
'gender' => 1,
'items' => 'カシミヤのマフラー',
'story' => '肌ざわりが最高な、冬にピッタリなプレゼント。長く使えて、温まる、そんなほっこりするアイテムを送れば、喜ばれること間違いない',
'price' => 6000,
'kind' => 4,
'item_brand' => 'カシミヤ　マフラー　メンズ',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/cashmee/cabinet/04054687/04169919/imgrc0068926416.jpg'
],
[
'id' =>43,
'gender' => 2,
'items' => 'DIESELのバッグ',
'story' => '男子に定番のディーゼルだけど、女子が持ってもかっこいい！',
'price' => 25000,
'kind' => 4,
'item_brand' =>'ディーゼル　バッグ レディース',
'img_path'=>'https://tshop.r10s.jp/auc-kiiroya-import/cabinet/801/die-l-a-80-120.jpg'
],
[
'id' =>44,
'gender' => 2,
'items' => 'Ane Moneのネックレス',
'story' => '仲が良い女友達からのプレゼントは、一生つけたい宝物！一味ちがうヴィンテージアイテムだと嬉しい♪',
'price' => 5000,
'kind' => 3,
'item_brand' => 'アネモネ　ネックレス',
'img_path'=>'https://tshop.r10s.jp/stylife/cabinet/item/854/u56854-01_1.jpg'
],
[
'id' =>45,
'gender' => 1,
'items' => '土屋鞄の財布',
'story' => '大人の恋人には、ちゃんとした物を贈りたい！シンプルで落ち着いたものを。',
'price' => 20000,
'kind' => 4,
'item_brand' => '土屋鞄　財布',
'img_path'=>'https://image.rakuten.co.jp/takuminowaza/cabinet/urbano/18ss/money-clip_top1.jpg'
],
[
'id' =>46,
'gender' => 1,
'items' => 'adidasのスニーカー',
'story' => 'おしゃれは足元から！こだわりたいスニーカーは、レアなコラボアイテムでサプライズ！',
'price' => 20000,
'kind' => 4,
'item_brand' => 'アディダス　スニーカー　メンズ',
'img_path'=>'https://tshop.r10s.jp/adidas/cabinet/201732w/bz0219-6.jpg'
],
[
'id' =>47,
'gender' => 1,
'items' => 'lacosteのベルト',
'story' => '高めのラコステだけど、ベルトは少しリーズナブル！さりげないおしゃれを楽しんで❤',
'price' => 7000,
'kind' => 4,
'item_brand' => 'ラコステ　ベルト',
'img_path'=>'https://image.rakuten.co.jp/richard/cabinet/lacoste/lb82670-top.jpg'
],
[
'id' =>48,
'gender' => 1,
'items' => 'TOMMY HILFIGERのTシャツ',
'story' => '何枚あっても困らないTシャツ。おしゃれ定番のブランドこそ、人からもらうと嬉しさ倍増！',
'price' => 5000,
'kind' => 2,
'item_brand' => 'トミー　Tシャツ',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/lakonect/cabinet/make/tommy-shirts042-09.jpg'
],
[
'id' =>49,
'gender' => 2,
'items' => 'Baccaratのペアグラス',
'story' => '初任給が入ったら！ちょっと良いペアグラスを両親へ。言葉にできない日頃の感謝を伝えよう',
'price' => 20000,
'kind' => 5,
'item_brand' => 'バカラ　ペアグラス',
'img_path'=>'https://tshop.r10s.jp/brandacross/cabinet/across-1/mille-ta-1.jpg'
],
[
'id' =>51,
'gender' => 1,
'items' => '4℃のペアリング',
'story' => '記念日へのプレゼントに。ちょっと粋なサプライズを考えて、ロマンチックな演出を♡',
'price' => 20000,
'kind' => 4,
'item_brand' => 'ヨンドシー　ペアリング',
'img_path'=> 'https://thumbnail.image.rakuten.co.jp/@0_mall/goldeco/cabinet/item20180613/io-02226-1.jpg'
],
[
'id' =>52,
'gender' => 1,
'items' => 'ディズニーペアチケット',
'story' => '家族での思い出、友達とワイワイ、恋人とまったり...。誰と行っても楽しめる、夢と魔法の国。季節ごとに変わるイベントをたのしんで！',
'price' => 20000,
'kind' => 4,
'item_brand' => 'ディズニーランド ペアチケット',
'img_path'=>'https://tshop.r10s.jp/freedom-m/cabinet/small_img04/260025.jpg'
],
[
'id' =>53,
'gender' => 1,
'items' => 'gelato piqueの部屋着',
'story' => '女の子の夢が詰まった可愛い部屋着♡ 実は男性用もあるんです！可愛いものが好きな男友達にGOOD',
'price' => 15000,
'kind' => 3,
'item_brand' => 'ジェラートピケ　部屋着　メンズ',
'img_path'=>'https://tshop.r10s.jp/adieu/cabinet/000123/b52pmnt172910.jpg'
],
[
'id' =>54,
'gender' => 2,
'items' => 'SABONのボディスクラブ',
'story' => '美意識高めな女の子にはこれを！マッサージができる香りも良いボディスクラブで、女子力が磨かれます！',
'price' => 3600,
'kind' => 2,
'item_brand' => 'サボン　ボディスクラブ',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/cosmecosme/cabinet/goq004/36009_1.jpg'
],
[
'id' =>57,
'gender' => 1,
'items' => 'お菓子を箱買い',
'story' => 'みんなでワイワイシェアするお菓子！買うときは一気に箱買いで☆',
'price' => 2000,
'kind' => 1,
'item_brand' => '菓子　箱買い',
'img_path'=>'https://tshop.r10s.jp/h-momo/cabinet/ok/imgrc0075821426.jpg'
],
[
'id' =>58,
'gender' => 1,
'items' => '手作りケーキ',
'story' => '買ったものよりも心に残る手作り。美味しいケーキをみんなでつつく瞬間も宝物♡',
'price' => 0,
'kind' => 2,
'item_brand' => 'ケーキ　手作りキット',
'img_path'=>'https://tshop.r10s.jp/ultramix/cabinet/pioneer/879674_1.jpg'
],
[
'id' =>60,
'gender' => 2,
'items' => 'Tiffany&Co.のネックレス',
'story' => '女性にとって永遠の憧れ、ティファニー。特別な日には、彼氏におねだりしてみよう。',
'price' => 20000,
'kind' => 4,
'item_brand' => 'ティファニー　ネックレス',
'img_path'=>'https://tshop.r10s.jp/a-domani/cabinet/05255502/imgrc0065192925.jpg'
],
[
'id' =>61,
'gender' => 2,
'items' => 'CHANELのアイシャドウ',
'story' => '大人になったからには、化粧品も良いものを！発色の良さも最高な、シャネルのシャドウで相手を喜ばせてみよう！',
'price' => 7000,
'kind' => 3,
'item_brand' => 'シャネル　アイシャドウ',
'img_path'=>'https://image.rakuten.co.jp/cosmeland/cabinet/2017_3/211939_1.jpg'
],
[
'id' =>62,
'gender' => 2,
'items' => 'クッション',
'story' => 'ふわふわで抱き心地の良いクッションは、部屋でくつろぐのにピッタリ！一人暮らしのあの人に、贈ってみよう',
'price' => 2000,
'kind' => 2,
'item_brand' => 'クッション',
'img_path'=>'https://tshop.r10s.jp/ofuca-mo/cabinet/ofuca2018-01/ani-relax_01.jpg'
],
[
'id' =>63,
'gender' => 1,
'items' => 'ゴルフバッグ',
'story' => 'ゴルフ好きなお父さんに！何をあげようか迷ったときは、お父さんと相談して決めてみよう。',
'price' => 10000,
'kind' => 5,
'item_brand' => 'ゴルフバッグ',
'img_path'=>'https://tshop.r10s.jp/atomicgolf/cabinet/itemimg0051/1609-atwc.jpg'
],
[
'id' =>64,
'gender' => 1,
'items' => 'スノードーム',
'story' => '卒業・入学のシーズンに。これからの新生活がうまくいきますようにと願いを込めてさくらのスノードームを♡',
'price' => 7000,
'kind' => 2,
'item_brand' => 'スノードーム',
'img_path'=>'https://image.rakuten.co.jp/n-l/cabinet/04321579/imgrc0060471958.jpg'
],
[
'id' =>66,
'gender' => 1,
'items' => 'COCOMEISTERの名刺入れ',
'story' => '本当のおしゃれとは、上質の物を長く使うこと。もともと持っている財布と合わせたプレゼントに感激。',
'price' => 20000,
'kind' => 4,
'item_brand' => 'ココマイスター　名刺入れ',
'img_path'=>'https://shop.r10s.jp/cocomeister/cabinet/shohin1/shohin015/b_cc_02.jpg'
],
[
'id' =>68,
'gender' => 2,
'items' => 'LOEWEのキーケース',
'story' => '一人暮らしの記念に。新しい家での充実した生活のために、キーケースからこだわって',
'price' => 25000,
'kind' => 4,
'item_brand' => 'ロエベ　キーケース',
'img_path'=>'https://image.rakuten.co.jp/drawers/cabinet/loe2/loe-10755k92-11.jpg'
],
[
'id' =>69,
'gender' => 2,
'items' => 'MARC JACOBSのピアス',
'story' => '男女どちらからも人気のある、マークジェイコブズ。アクセサリーも可愛いんです！カップルでお揃いも♪',
'price' => 15000,
'kind' => 4,
'item_brand' => 'マークジェイコブス　ピアス',
'img_path'=>'https://image.rakuten.co.jp/ilb/cabinet/mj/m0008544-106_a.jpg'
],
[
'id' =>70,
'gender' => 1,
'items' => '自己啓発本',
'story' => '外見だけでなく、内面を磨く自分磨き。身につく知識は一生もの！大学生うや社会人へのプレゼントに',
'price' => 1500,
'kind' => 2,
'item_brand' => '自己啓発本',
'img_path'=>'https://tshop.r10s.jp/book/cabinet/2917/9784791622917.jpg'
],
[
'id' =>71,
'gender' => 1,
'items' => 'イタリア土産のバッグ',
'story' => 'イタリアに旅行に行く人必見！上質なアイテムがGETできます。これまで育ててくれた母親に、20年分の感謝を込めて。',
'price' => 2000,
'kind' => 5,
'item_brand' => 'バッグ',
'img_path'=>'https://image.ias.rakuten.co.jp/dst/ec/188948/cpc/3306226/90883c35-4ef6-457c-a5bc-61f23d8072fa_200_200.jpg'
],
[
'id' =>72,
'gender' => 1,
'items' => 'GUCCIのネクタイ',
'story' => 'おしゃれなお父さんへ。いつまでもカッコよく、男らしくいてほしいから。ハイブランドのネクタイで差をつけて。',
'price' => 30000,
'kind' => 5,
'item_brand' => 'グッチ　ネクタイ',
'img_path'=>'https://tshop.r10s.jp/allzo/cabinet/gucci/guj-806.jpg'
],
[
'id' =>73,
'gender' => 2,
'items' => 'Tiffanyのマグカップ',
'story' => 'アクセサリーだけじゃないんです！このカップでコーヒーを飲めば、まさに『ティファニーで朝食を』',
'price' => 8000,
'kind' => 4,
'item_brand' => 'ティファニー　マグカップ',
'img_path'=>'https://thumbnail.image.rakuten.co.jp/@0_mall/qulin/cabinet/imgrc0078604393.jpg'
],
[
'id' =>74,
'gender' => 2,
'items' => 'CASUCAのネックレス',
'story' => '人とかぶらない、とっておきの物を渡したい。東京に1店舗しかない、最高にハイセンスな贈り物を',
'price' => 75000,
'kind' => 4,
'item_brand' => 'ダイヤモンド　ネックレス',
'img_path'=>'https://image.rakuten.co.jp/rpfstore/cabinet/20160423br/lacp057261.jpg'
],
[
'id' =>75,
'gender' => 2,
'items' => '映画のチケット',
'story' => '「これで2人でデートに行ってきて♪」と仲の良い両親へプレゼント。',
'price' => 1800,
'kind' => 5,
'item_brand' => '映画チケット',
'img_path'=>'https://tshop.r10s.jp/gold/myroom/product/single/image1/b08-8316245.jpg'
],
[
'id' =>76,
'gender' => 1,
'items' => '映画のプレミアムチケット',
'story' => 'いつもと違う非日常を味わいたい人へ。プレミアムシートで、優雅にリッチに楽しもう',
'price' => 5000,
'kind' => 4,
'item_brand' => '映画　チケット',
'img_path'=>'https://tshop.r10s.jp/gold/myroom/product/single/image1/b08-8316245.jpg'
],
[
'id' =>78,
'gender' => 1,
'items' => '元気の出るCD',
'story' => '毎日頑張っている全ての人へ贈ってみて。「これ聞いて元気出しな」の一言で、疲れを吹っ飛ばして！',
'price' => 1500,
'kind' => 2,
'item_brand' => '音楽',
'img_path'=>'https://tshop.r10s.jp/neowing-r/cabinet/item_img_1073/rbuv-31.jpg'
],
[
'id' =>79,
'gender' => 2,
'items' => 'CHANELのルージュ',
'story' => '「その日、ひょっとしたら、運命の人と出会えるかもしれないじゃない。その運命のためにも、できるだけ可愛くあるべきだわ」BY　ココ・シャネル',
'price' => 5000,
'kind' => 3,
'item_brand' => 'シャネル　ルージュ',
'img_path'=>'https://image.rakuten.co.jp/cosmeland/cabinet/2017_3/247910_1.jpg'
],
[
'id' =>80,
'gender' => 2,
'items' => 'マガジン',
'story' => 'スマホやサイトが進化したこの時代、意外と雑誌を買う機会は少ないのでは？ファッション、食、インテリア...　じっくり読んで、日々の暮らしの質を上げよう',
'price' => 800,
'kind' => 2,
'item_brand' => '雑誌',
'img_path'=>'https://image.ias.rakuten.co.jp/dst/ec/12770/cpc/1939977/22d4bbe6-5ff3-4fab-bfeb-0892db172eac_200_200.jpg'
],
[
'id' =>81,
'gender' => 1,
'items' => 'スマートウォッチ',
'story' => '新しい物、テクノロジー好きな人へ。最先端の物を身につければ、仕事のできる優秀な社会人に!?',
'price' => 50000,
'kind' => 5,
'item_brand' => 'スマートウォッチ',
'img_path'=>'https://tshop.r10s.jp/arkbridge/cabinet/05021516/i5plus-newblack-1.jpg'
],
[
'id' =>83,
'gender' => 2,
'items' => '寄せ書き',
'story' => '気持ちのこもったものが嬉しいんです。1人1人からのメッセージを読みながら、幸せ気分に浸れます。',
'price' => 300,
'kind' => 2,
'item_brand' => '寄せ書き　色紙',
'img_path'=>'https://tshop.r10s.jp/kichi-kiche/cabinet/img07/ar0819102-104-01.jpg'
],
[
'id' =>82,
'gender' => 2,
'items' => 'NIKEのスニーカー',
'story' => 'ランニングやジムなど、ワークアウトが大流行！おしゃれなナイキのスニーカーがあれば、脱3日坊主！',
'price' => 10000,
'kind' => 3,
'item_brand' => 'ナイキ スニーカー レディース',
'img_path'=>'https://tshop.r10s.jp/mischief/cabinet/ss16/10039487.jpg'
],
[
'id' =>84,
'gender' => 2,
'items' => 'ROSEFIELDの時計',
'story' => 'シンプルでシックな腕時計は、ダニエルウェリントンだけじゃない！ほかの人とは違うおしゃれを狙って♪',
'price' => 10000,
'kind' => 4,
'item_brand' => 'ローズフィールド　時計',
'img_path'=>'https://tshop.r10s.jp/a-base/cabinet/imgrc0075528762.jpg'
],
[
'id' =>85,
'gender' => 2,
'items' => 'Michael Korsのバッグ',
'story' => 'シンプルでシックな腕時計は、ダニエルウェリントンだけじゃない！ほかの人とは違うおしゃれを狙って♪',
'price' => 20000,
'kind' => 2,
'item_brand' => 'マイケルコース　バッグ',
'img_path'=>'https://tshop.r10s.jp/bighit/cabinet/mik/mikf2gttt8l01-1.jpg'
],
[
'id' =>86,
'gender' => 2,
'items' => '花束',
'story' => '送別、歓迎、お礼の定番。自分で毎日買わないからこそ、もらうと嬉しい。お花好きの相手には、あらかじめ好きな花を聞いてみるのもよし',
'price' => 3000,
'kind' => 2,
'item_brand' => '花束',
'img_path'=>' https://tshop.r10s.jp/bon-sense/cabinet/10/bd-10-1.jpg'
],
[
'id' =>87,
'gender' => 1,
'items' => 'アロハシャツ',
'story' => 'ハワイや沖縄のお土産に♪　夏のイベントにも着ていけるおしゃれなアロハシャツは、1枚持っていると楽しいかも',
'price' => 3000,
'kind' => 2,
'item_brand' => 'アロハシャツ メンズ',
'img_path'=>'https://tshop.r10s.jp/yujine/cabinet/02991552/04354040/imgrc0071774762.jpg'
],
[
'id' =>88,
'gender' => 1,
'items' => 'G-SHOCKの時計',
'story' => '男女問わず大人気なG-SHOCKは、限定物をGETして周りと差をつけて！自分らしいこだわりの１本を！',
'price' => 10000,
'kind' => 4,
'item_brand' => 'G-SHOCK　時計',
'img_path'=>' https://tshop.r10s.jp/p-select/cabinet/001/036/g-100bb-1ajf.jpg'
],
[
'id' =>89,
'gender' => 1,
'items' => 'ディズニーランドのパンツ',
'story' => '下着は思いっきりふざけて可愛く！ただし、あげる相手は男子に限ります。',
'price' => 1400,
'kind' => 2,
'item_brand' => 'ディズニー　パンツ メンズ',
'img_path'=>'https://tshop.r10s.jp/cinemacollection/cabinet/r20170825/sm-awds4723-24.jpg'
],
[
'id' =>90,
'gender' => 1,
'items' => 'お誕生日ムービー',
'story' => '手作りアルバム以上に心に響くのがこちら。好きな音楽やお気に入りの写真を選んで、演出もこだわって。相手をびっくりさせましょう',
'price' => 99999,
'kind' => 2,
'item_brand' => 'お誕生日ムービー',
'img_path'=>'https://tshop.r10s.jp/mgift/cabinet/04990784/moviemessagebirth01.jpg'
],
[
'id' =>91,
'gender' => 1,
'items' => '保温水筒',
'story' => '保温ができる水筒は、利便性が抜群！',
'price' => 2000,
'kind' => 2,
'item_brand' => '保温水筒',
'img_path'=>' https://tshop.r10s.jp/mamababy/cabinet/jishahin9/527607-e.jpg'
],
[
'id' =>92,
'gender' => 1,
'items' => 'Salvatore Ferragamoのネクタイ',
'story' => 'ちょっぴり大人っぽく、しっかり見せたいときに。ネクタイからおしゃれに決めて。',
'price' => 20000,
'kind' => 5,
'item_brand' => 'フェラガモ　ネクタイ',
'img_path'=>'https://tshop.r10s.jp/allzo/cabinet/ferragamo/fgj-891.jpg'
],
[
'id' =>93,
'gender' => 1,
'items' => 'NAKAMURA KEITH HARINGのニット帽',
'story' => 'ファッションのワンポイントにもなるニット帽を。冬のプレゼントにぴったり',
'price' => 2000,
'kind' => 2,
'item_brand' => 'キースへリング　ニット帽',
'img_path'=>'https://tshop.r10s.jp/space-store/cabinet/item/105000/105900/105970-1.jpg'
],
[
'id' =>94,
'gender' => 1,
'items' => 'SHIPSのセーター',
'story' => 'ハードルの高い洋服のプレゼントでも、定番でシンプルなシップスなら選びやすい☆ 冬の寒い時期にプレゼントされたら、大切に着るはず！',
'price' => 5000,
'kind' => 4,
'item_brand' => 'シップス　セーター メンズ',
'img_path'=>'https://tshop.r10s.jp/0101marui/cabinet/to410/278/to410-27885-03b.jpg'
],
[
'id' =>95,
'gender' => 2,
'items' => 'SKAGENの時計',
'story' => '周りに持っている人が少なく、品がよく色のセンスの良い１本をおねだり。',
'price' => 20000,
'kind' => 4,
'item_brand' => 'スカーゲン　時計',
'img_path'=>'https://tshop.r10s.jp/nopple/cabinet/skagen/imgrc0069997812.jpg'
],
[
'id' =>96,
'gender' => 1,
'items' => 'Bottega Venetaの名刺入れ',
'story' => 'ビジネスシーンで大活躍な名刺入れは、良いものを使いたい！持ち物から一流のビジネスマンへ！',
'price' => 47000,
'kind' => 4,
'item_brand' => 'ボッテガ　名刺入れ',
'img_path'=>'https://tshop.r10s.jp/kaitsukedoh/cabinet/bottega/133945dbr.jpg'
],
[
'id' =>97,
'gender' => 2,
'items' => 'MACのシャドウパレット',
'story' => '10種類のカラーのパレットをプレゼント。カラフルなシャドウで、夏のメイクを楽しんでもらおう！',
'price' => 5000,
'kind' => 3,
'item_brand' => 'MAC　シャドウパレット',
'img_path'=>'https://tshop.r10s.jp/aquabouquet/cabinet/a03/773602454860.jpg'
],
[
'id' =>98,
'gender' => 2,
'items' => 'スカーフ',
'story' => 'いつものおしゃれに一味を加えるスカーフは、洋服よりもあげやすい♪　おしゃれさんなあの人に、お母さんに。１枚送ってみては？',
'price' => 2000,
'kind' => 3,
'item_brand' => 'スカーフ',
'img_path'=>'https://tshop.r10s.jp/girl-k/cabinet/item_image/accessory2/sc-k-2-1.jpg'
],
[
'id' =>99,
'gender' => 2,
'items' => 'THREEのリップ',
'story' => '何本あってもこまらないリップは、絶対に喜ばれる！マットの物が、シアーのものか。相手の好みをリサーチ。',
'price' => 3000,
'kind' => 2,
'item_brand' => 'THREE　リップ',
'img_path'=>' https://tshop.r10s.jp/cosmelink/cabinet/05014073/c0129629529074.jpg'
],
[
'id' =>100,
'gender' => 1,
'items' => '日本酒',
'story' => 'お酒好きなお父さんへ。いつもよりちょっと高めのお酒を用意して、一緒にお酒を嗜む時間も大事な親孝行',
'price' => 3600,
'kind' => 5,
'item_brand' => '日本酒',
'img_path'=>' https://tshop.r10s.jp/yokogoshi/cabinet/shohin/720x2/720x2_100setn1.jpg'
],
[
'id' =>101,
'gender' => 1,
'items' => '炭酸水メーカー',
'story' => 'コンビニでいつも買う炭酸。実はお家でも作れる！お家でいつでもお風呂上りの炭酸を楽しんで！',
'price' => 10000,
'kind' => 5,
'item_brand' => '炭酸水メーカー',
'img_path'=>' https://tshop.r10s.jp/sodastream/cabinet/04045969/imgrc0069277600.jpg'
],
[
'id' =>102,
'gender' => 2,
'items' => 'ディフューザー',
'story' => 'お部屋で良い香りにつつまれてリラックスするのにピッタリ！普段の生活から女子力を高めて♪',
'price' => 5000,
'kind' => 3,
'item_brand' => 'ディヒューザー',
'img_path'=>'https://tshop.r10s.jp/viewtam/cabinet/do/do029.gif'
],
[
'id' =>103,
'gender' => 2,
'items' => '旅行のガイドブック',
'story' => '旅行に行く予定があってもなくても、ガイドブックって見るだけで楽しい :にこっ: 旅行好きなあの人や、癒されたいあの人に。',
'price' => 2000,
'kind' => 2,
'item_brand' => '地球の歩き方',
'img_path'=>' https://tshop.r10s.jp/book/cabinet/2098/9784478822098.jpg'
],
[
'id' =>104,
'gender' => 2,
'items' => '手作りポーチ',
'story' => 'いくつあっても困らない優れモノのポーチ。手作りならば、嬉しさもひとしお！',
'price' => 0,
'kind' => 2,
'item_brand' => 'ポーチ　手作り',
'img_path'=>'https://tshop.r10s.jp/cottonheart/cabinet/patchwork/pa-547.jpg'
],
[
'id' =>105,
'gender' => 1,
'items' => 'BVLGARIの香水',
'story' => 'さりげなく良い香りがする人って魅力的ですよね！男子に人気なのは、ブルガリやランバンだそう♪',
'price' => 4000,
'kind' => 4,
'item_brand' => 'ブルガリ　香水',
'img_path'=>'https://tshop.r10s.jp/belmo/cabinet/img031/fr0783320881565.jpg'
],
[
'id' =>106,
'gender' => 1,
'items' => 'Paul Smithのタイピン',
'story' => 'タイピンは、デザインが命！シンプルかつちょっと遊び心のあるデザインが人気だそう',
'price' => 15000,
'kind' => 4,
'item_brand' => 'ポールスミス　タイピン',
'img_path'=>'https://tshop.r10s.jp/rcmdva/cabinet/ys05/ys-atxctpinred92.jpg'
],
[
'id' =>107,
'gender' => 2,
'items' => '紅茶',
'story' => '誰にでも気軽に配れる紅茶はお土産にぴったり！インド、イギリス、フランス、オランダ、、各国のお茶を飲んでみても楽しいかも',
'price' => 1000,
'kind' => 2,
'item_brand' => '紅茶',
'img_path'=>' https://tshop.r10s.jp/inobun/cabinet/062-02/062382-1.jpg'
],
[
'id' =>108,
'gender' => 1,
'items' => 'FURLAのハンカチ',
'story' => '百貨店などで気軽に買えるハンカチは、ちょっとしたプレゼントに◎　FULRA, Jill stuart, wedgewoodなど、いろんなブランドが揃います♪',
'price' => 1000,
'kind' => 2,
'item_brand' => 'フルラ　ハンカチ',
'img_path'=>'https://tshop.r10s.jp/acrop/cabinet/05280295/imgrc0073453962.jpg'
],
[
'id' =>109,
'gender' => 2,
'items' => 'フェイスローラー',
'story' => '顔から全身に使える美容アイテム。綺麗になりたい友達にご褒美のプレゼント！',
'price' => 5000,
'kind' => 3,
'item_brand' => 'フェイスローラー',
'img_path'=>'https://tshop.r10s.jp/chinavi/cabinet/microcurrent/mini/thumb2.jpg'
],
[
'id' =>110,
'gender' => 2,
'items' => 'BOTANISTのシャンプー',
'story' => '圧倒的人気を誇るボタニスト。香りが良く、髪にやさしい優れもの。髪は女の命です。',
'price' => 3888,
'kind' => 2,
'item_brand' => 'ボタニスト',
'img_path'=>'https://tshop.r10s.jp/kobe-beauty-labo/cabinet/04278206/refresh/rest/imgrc0071486022.jpg'
],
[
'id' =>111,
'gender' => 2,
'items' => '子猫',
'story' => '子猫？！斬新なプレゼントですが、遠距離の恋人に、代わりにそばにいてくれるやさしさが伝わられる♪',
'price' => 300000,
'kind' => 4,
'item_brand' => '猫　飼育',
'img_path'=>' https://tshop.r10s.jp/kurashinokoubin/cabinet/pn70000-16/76992.jpg',
],
[
'id' =>112,
'gender' => 1,
'items' => 'Apple Watch',
'story' => '機能が多くてデザインがシンプル、新社会人を応援してあげる！',
'price' => 50000,
'kind' => 4,
'item_brand' => 'アップルウォッチ',
'img_path'=>'https://tshop.r10s.jp/memon-case/cabinet/img/40010/1116838-1.jpg'
],
[
'id' =>114,
'gender' => 2,
'items' => 'アームカバー',
'story' => '自転車で買い物してくれるお母さんに感謝とケアを同時に伝えるアイテム！',
'price' => 1000,
'kind' => 5,
'item_brand' => 'アームカバー',
'img_path'=>'https://tshop.r10s.jp/youichi/cabinet/bikyusoku/armcaber/imgrc0064311229.jpg'
],
[
'id' =>115,
'gender' => 1,
'items' => 'SKAGENの時計',
'story' => 'シンプルでおしゃれ！草食系男子も魅力up！',
'price' => 20000,
'kind' => 4,
'item_brand' => 'スカーゲン　メンズ',
'img_path'=>'https://tshop.r10s.jp/10keiya/cabinet/img138001-139000-1/138871-1.jpg'
],
[
'id' =>116,
'gender' => 2,
'items' => 'DEAN&DELUCAのお菓子',
'story' => '少し高めのお菓子だからこそ、もらって嬉しい♡　チョコやクッキーなど、おしゃれアイテムのたくさん揃うディーンアンドデルーカをチョイス',
'price' => 1000,
'kind' => 2,
'item_brand' => 'ディーンアンドデルーカ　お菓子',
'img_path'=>'https://tshop.r10s.jp/retailer/cabinet/jap/jap4/jap-8302-01.jpg'
],
[
'id' =>117,
'gender' => 1,
'items' => 'チルドコーヒー',
'story' => '「運転ありがとう」と「寝ないでね♡」の心を込めて。(笑)　ちょっとした心配りが、喜ばれます。',
'price' => 300,
'kind' => 2,
'item_brand' => 'チルドコーヒー',
'img_path'=>'https://tshop.r10s.jp/mitsuboshi/cabinet/04241362/04241363/04472446/imgrc0061780134.jpg'
],
[
'id' =>118,
'gender' => 2,
'items' => 'CA4LAのカンカン帽',
'story' => '夏のファッションに欠かせないカンカン帽のプレゼント！「絶対似合う」ものを見つけて彼女にプレゼントしてみよう',
'price' => 15000,
'kind' => 4,
'item_brand' => 'CA4LA　帽子',
'img_path'=>' https://tshop.r10s.jp/balios/cabinet/1404/545-1-04-0001-1.jpg'
],
[
'id' =>119,
'gender' => 2,
'items' => '傘',
'story' => 'テンションの下がる雨だけど、素敵な傘があれば一気にあげる！長持ちする少し高めの傘をチョイスしてもよし',
'price' => 3000,
'kind' => 3,
'item_brand' => '傘',
'img_path'=>' https://tshop.r10s.jp/lestons/cabinet/05542629/imgrc0073304180.jpg'
],
[
'id' =>120,
'gender' => 1,
'items' => 'Championのパーカー',
'story' => 'ペアルックにもできる、男女問わず人気なチャンピオン！スポーティーなおしゃれを楽しんで！',
'price' => 6000,
'kind' => 3,
'item_brand' => 'チャンピオン　パーカー',
'img_path'=>'https://tshop.r10s.jp/hbich/cabinet/17fwmen1/c3-c118-01.jpg'
],
[
'id' =>121,
'gender' => 1,
'items' => 'メッセージ入りミカン',
'story' => 'みかんにメッセージという斬新なアイディア！(笑) どんなものであれ、メッセージいりのものは嬉しいものです♡',
'price' => 50,
'kind' => 2,
'item_brand' => 'みかん',
'img_path'=>'https://tshop.r10s.jp/f303615-yuasa/cabinet/i2/5605-5489-01s.jpg'
],
[
'id' =>122,
'gender' => 1,
'items' => 'お酒（地酒）',
'story' => '旅行に行ったら、その土地のお酒を堪能するのが旅行の醍醐味。お土産にも最適です。',
'price' => 3000,
'kind' => 5,
'item_brand' => '地酒',
'img_path'=>' https://tshop.r10s.jp/hombo/cabinet/jizake/jizake1800.gif'
],
[
'id' =>123,
'gender' => 2,
'items' => 'ケーキ',
'story' => '自分の誕生日にみんなでケーキをつつく時間が至福。タカノフルーツパーラーや、ハーブスなどでちょっとリッチ気分で。',
'price' => 800,
'kind' => 2,
'item_brand' => 'ケーキ',
'img_path'=>' https://tshop.r10s.jp/ecolecriollo/cabinet/item-images/22-4014_500_1.jpg'
],
[
'id' =>124,
'gender' => 1,
'items' => 'スニーカー',
'story' => '履きやすさとおしゃれさを兼ね合わせたニューバランスのスニーカー。ユニセックスで楽しめる！',
'price' => 8000,
'kind' => 4,
'item_brand' => 'ニューバランス　スニーカー',
'img_path'=>'https://tshop.r10s.jp/step-sports/cabinet/nb18ss/w368-jbr.jpg'
],
[
'id' =>125,
'gender' => 1,
'items' => 'ご当地お菓子',
'story' => 'ハイチュウ、ポッキー、ぷっちょ、、、日本全国に旅行にいっていつもと違うものを味わうのが楽しい☆',
'price' => 500,
'kind' => 2,
'item_brand' => 'ハイチュウ',
'img_path'=>'https://tshop.r10s.jp/3jinooyatsu/cabinet/imgrc0064103242.jpg'
],
[
'id' =>126,
'gender' => 1,
'items' => 'ライブチケット',
'story' => 'BUMP OF CHICKENのチケットをプレゼント。自分も一緒に楽しむのもあり。相手が好きなアーティストのチケットをプレゼントするもあり◎',
'price' => 8000,
'kind' => 3,
'item_brand' => 'ライブDVD',
'img_path'=>'https://tshop.r10s.jp/guruguru-ds/cabinet/525/upbh-1239.jpg'
],
[
'id' =>127,
'gender' => 1,
'items' => 'Surface',
'story' => 'プレゼントにパソコン！？　入学祝いや就職祝いに、パソコンを。ちょっと高額なので、大切に使おう！',
'price' => 100000,
'kind' => 5,
'item_brand' => 'サーフェス',
'img_path'=>'https://tshop.r10s.jp/jism/cabinet/0732/4549576096605.jpg'
],
[
'id' =>128,
'gender' => 2,
'items' => 'K&Aの花咲く色鉛筆',
'story' => '入学や進学のお祝いにおすすめ。鉛筆全体の半分に芯が入っていて、あとの半分に植物の種が埋め込まれているもの。花を育てられます❁',
'price' => 340,
'kind' => 2,
'item_brand' => '色鉛筆',
'img_path'=>' https://tshop.r10s.jp/officeone/cabinet/mitsubishi/uc72c.gif'
],
[
'id' =>129,
'gender' => 1,
'items' => 'FrancFrancの電動マッサージ機',
'story' => '初任給で両親に感謝の気持ちを伝えたい？電動マッサージ機で両親の肩こりを解消しましょう！',
'price' => 8000,
'kind' => 5,
'item_brand' => '電動マッサージ機',
'img_path'=>' https://tshop.r10s.jp/gold/kanalia/item/denma0101.png'
],
[
'id' =>130,
'gender' => 2,
'items' => '空気清浄機',
'story' => '価格.comランキング1位！恋人に新鮮な空気をプレゼントしよう！',
'price' => 15000,
'kind' => 5,
'item_brand' => '空気清浄機',
'img_path'=>'https://tshop.r10s.jp/emedama/cabinet/mc187/93727.jpg'
],
[
'id' =>131,
'gender' => 1,
'items' => 'キャンプ用バーナー',
'story' => '安全、安心かつ長く使えるキャンプバーナー、友達と一緒にキャンプを楽しもう！',
'price' => 5000,
'kind' => 2,
'item_brand' => 'キャンプ用バーナー',
'img_path'=>'https://tshop.r10s.jp/auc-odyamakei/cabinet/000158/1001520_1.jpg'
],
[
'id' =>132,
'gender' => 1,
'items' => '相手の好きなお菓子',
'story' => '手軽に送れるサプライズ？友達のツイッターのいいねから探そう！',
'price' => 500,
'kind' => 2,
'item_brand' => 'お菓子',
'img_path'=>'https://tshop.r10s.jp/chugokuoroshi/cabinet/okashi.jpg'
],
[
'id' =>133,
'gender' => 2,
'items' => '録音できる目覚まし時計',
'story' => '皆の声が入れられる目覚まし時計！これから社会人になる友達へ思い出満載で最高なプレゼント🌸',
'price' => 5000,
'kind' => 2,
'item_brand' => '目覚まし時計 録音',
'img_path'=>'https://tshop.r10s.jp/biccamera/cabinet/product/1493/00000001835822_a01.jpg'
],
[
'id' =>134,
'gender' => 2,
'items' => 'ストレッチボール',
'story' => '手頃な値段で健康を手に入れられる！健康を気にする友達にユニークなサプライズ！',
'price' => 1000,
'kind' => 1,
'item_brand' => 'ストレッチボール',
'img_path'=>'https://tshop.r10s.jp/lightnetshop/cabinet/00020/007696.jpg'
],
[
'id' =>135,
'gender' => 2,
'items' => 'Starbucks Coffeeのタンブラー',
'story' => '可愛いタンブラーを持ち歩いて、テンションを上げよう！これを持ってお店にいくと20円引きになります♡',
'price' => 3000,
'kind' => 2,
'item_brand' => 'スターバックス　タンブラー',
'img_path'=>'https://tshop.r10s.jp/moncachette/cabinet/g18-1/152012749_1.jpg'
],
[
'id' =>136,
'gender' => 1,
'items' => 'スーツ',
'story' => '就活や新社会人生活を始めるあなたに、応援の気持ちを伝える！',
'price' => 10000,
'kind' => 5,
'item_brand' => 'スーツ　メンズ',
'img_path'=>'https://tshop.r10s.jp/junchan/cabinet/05008248/imgrc0070906193.jpg'
],
[
'id' =>137,
'gender' => 1,
'items' => '自分の描いた絵',
'story' => '無印良品で水筒を買って、彼女が描いてくれた絵をカバーとして入れて毎日使ってます！',
'price' => 0,
'kind' => 4,
'item_brand' => 'アート　絵',
'img_path'=>'https://tshop.r10s.jp/takarafune/cabinet/05160785/46slp74.jpg'
],
[
'id' =>138,
'gender' => 2,
'items' => 'ハムスター',
'story' => '可愛い生き物をもらって、元気で育てあげられるように毎日やる気満々！',
'price' => 1000,
'kind' => 5,
'item_brand' => 'ハムスター　ぬいぐるみ',
'img_path'=>'https://tshop.r10s.jp/hondastore/cabinet/img58321532.jpg'
],
[
'id' =>139,
'gender' => 2,
'items' => 'ソファ',
'story' => '一人暮らしいのあなたに生活品質アップNo.1アイテム！',
'price' => 7000,
'kind' => 5,
'item_brand' => 'ソファ',
'img_path'=>'https://image.ias.rakuten.co.jp/dst/ec/125003/cpc/3186780/e4990c78-b41b-4802-9ee9-8a66349160e6_200_200.jpg'
],
[
'id' =>140,
'gender' => 1,
'items' => '眼鏡拭き',
'story' => '綺麗なメガネを通してこの世界を見よう！',
'price' => 1000,
'kind' => 2,
'item_brand' => '眼鏡拭き',
'img_path'=>'https://tshop.r10s.jp/sunnyhours/cabinet/27rk14r.jpg'
],
[
'id' =>141,
'gender' => 1,
'items' => 'レーザーポインター',
'story' => 'スピーチが好きな人に、格好いいポインターを送ってあげよう！',
'price' => 2000,
'kind' => 2,
'item_brand' => 'レーザーポインター',
'img_path'=>'https://tshop.r10s.jp/tokyo-tools/cabinet/laser/img57665302.jpg'
],
[
'id' =>142,
'gender' => 2,
'items' => 'ぬいぐるみ',
'story' => 'アメリカではバレンタインに彼氏が彼女に贈ることも。テディベアが人気♡',
'price' => 1000,
'kind' => 4,
'item_brand' => 'テディベア',
'img_path'=>'https://tshop.r10s.jp/teddyshop/cabinet/02886257/0981.jpg'
],
[
'id' =>143,
'gender' => 2,
'items' => '盆栽',
'story' => '種から育てる喜びを伝えよう',
'price' => 1500,
'kind' => 2,
'item_brand' => '盆栽',
'img_path'=>'https://tshop.r10s.jp/yukei/cabinet/gift/1478.jpg'
],
[
'id' =>144,
'gender' => 2,
'items' => '体重計',
'story' => '体組成がわかる体重計で体を大事に管理しましょう！',
'price' => 2500,
'kind' => 2,
'item_brand' => 'タニタ',
'img_path'=>'https://tshop.r10s.jp/r-kojima/cabinet/119/2398364_01l.jpg'
],
[
'id' =>145,
'gender' => 2,
'items' => 'スライム',
'story' => '肌触りの良いスライムをいじって疲労回復！スライムを楽しめるのって、子供だけじゃないんです。',
'price' => 1000,
'kind' => 1,
'item_brand' => 'スライム',
'img_path'=>'https://tshop.r10s.jp/festival-plaza/cabinet/keihin/gng-731996.jpg'
],
[
'id' =>146,
'gender' => 2,
'items' => '知恵の輪',
'story' => '頭の使い方を柔軟に鍛えてくれるアイテム！',
'price' => 800,
'kind' => 1,
'item_brand' => '知恵の輪',
'img_path'=>'https://tshop.r10s.jp/book/cabinet/5611/4977513055611.jpg'
],
[
'id' =>147,
'gender' => 2,
'items' => 'ティッシュカバー',
'story' => '風邪をひきやすい友達に、必須アイテムのティッシュをカバーしてあげよう！',
'price' => 500,
'kind' => 2,
'item_brand' => 'ティッシュカバー',
'img_path'=>'https://tshop.r10s.jp/risoukyou/cabinet/item/item0032/ka-04525.jpg'
],
[
'id' =>148,
'gender' => 1,
'items' => 'うまい棒',
'story' => 'うまい棒の箱買いで友達を癒そう！みんなでシェアして食べるのも楽しい！',
'price' => 699,
'kind' => 1,
'item_brand' => 'うまい棒　30本',
'img_path'=>'https://tshop.r10s.jp/yokohama-yamatoya/cabinet/02024658/imgrc0067446657.jpg'
],
[
'id' =>149,
'gender' => 2,
'items' => '椅子',
'story' => 'インテリアにこだわりたい人には、センスの良い椅子をプレゼント。北欧ブランドが人気。',
'price' => 2000,
'kind' => 5,
'item_brand' => '椅子　IKEA',
'img_path'=>'https://tshop.r10s.jp/polori/cabinet/ikea/chair/60162301_2.jpg'
],
[
'id' =>170,
'gender' => 1,
'items' => 'エアロバイク',
'story' => 'お家でエクササイズ！お家へのプレゼントとして、家族みんなで使いたい！',
'price' => 20000,
'kind' => 5,
'item_brand' => 'エアロバイク',
'img_path'=>'https://image.ias.rakuten.co.jp/dst/ec/288272/cpc/3079273/c3e83e37-c0b9-4899-8abd-bfc29609e4ff_200_200.jpg'
],
[
'id' =>171,
'gender' => 2,
'items' => 'ハンモック',
'story' => 'キャンプや海で大活躍！？風に吹かれて気持ちよーく過ごしたい！',
'price' => 10000,
'kind' => 3,
'item_brand' => 'ハンモック',
'img_path'=>'https://tshop.r10s.jp/windykids/cabinet/outdoor/hammock1.jpg'
],
[
'id' =>172,
'gender' => 2,
'items' => 'ひのきのまな板',
'story' => '一人暮らしの人や、お母さんへ。良いまな板で、上質なお料理を楽しみたい！',
'price' => 10000,
'kind' => 5,
'item_brand' => 'ひのき　まな板',
'img_path'=>'https://tshop.r10s.jp/umezawa/cabinet/manaita/imgrc0065606906.jpg'
],
[
'id' =>173,
'gender' => 2,
'items' => 'トミカのチョコレートパーシー',
'story' => '機関車トーマスのキャラクター。チョコレートがかかっていて可愛い♡',
'price' => 900,
'kind' => 1,
'item_brand' => 'トミカ　チョコレートパーシー',
'img_path'=>'https://tshop.r10s.jp/goodmarket/cabinet/imgsrc0/d9/d98/b00i7jxato.jpg'
],
[
'id' =>174,
'gender' =>2,
'items' => 'マジックワンドソルト',
'story' => '星形の魔法の杖。料理の仕上げに振りかければ…おいしい魔法がかかっちゃう。料理好きの友人に送って、一緒に料理すれば盛り上がる',
'price' =>1500,
'kind' =>2,
'item_brand' => 'マジックワンドソルト',
'img_path'=>'https://tshop.r10s.jp/hideout/cabinet/table/imgrc0065479322.jpg'
],
[
'id' =>175,
'gender' =>2,
'items' => '晴雨予報グラス',
'story' => '今日は午後からお出かけ。晴れるかなー。数時間後の天気を楽しみながら知れちゃう。',
'price' =>1700,
'kind' =>2,
'item_brand' => '晴雨予報グラス',
'img_path'=>'https://tshop.r10s.jp/keitaistrap/cabinet/00881788/47-519607.jpg'
],
[
'id' =>176,
'gender' =>2,
'items' => 'Mr.tea',
'story' => '紅茶をよく飲む友人に。ちょっと面白くてかわいくて。喜んでもらえました。',
'price' =>756,
'kind' =>1,
'item_brand' => 'Mr.tea',
'img_path'=>'https://tshop.r10s.jp/idealstore/cabinet/item-m/mrtea_1.jpg'
],
[
'id' =>177,
'gender' =>2,
'items' => 'Fridgeezoo',
'story' => '冷蔵庫をあけるとしゃべりだす。一人暮らしの友人に。',
'price' =>2200,
'kind' =>2,
'item_brand' => 'Fridgeezoo',
'img_path'=>'https://tshop.r10s.jp/biccamera/cabinet/product/2354/00000003457886_a01.jpg'
],
[
'id' =>178,
'gender' =>2,
'items' => 'キーボードブラシ',
'story' => 'コーディングいつも頑張っている同期へ。ちょっとしたプレゼント。',
'price' =>800,
'kind' =>1,
'item_brand' => 'キーボードブラシ',
'img_path'=>'https://tshop.r10s.jp/jetprice/cabinet/256/912274.jpg'
],
[
'id' =>179,
'gender' =>2,
'items' => 'オルゴールフラワー',
'story' => 'お花好きの母親に…。花とメロディのプレゼント。',
'price' =>6700,
'kind' =>5,
'item_brand' => 'オルゴールフラワー',
'img_path'=>'https://tshop.r10s.jp/hibiyakadan/cabinet/zeneral/tf2907.jpg'
],
[
'id' =>180,
'gender' =>1,
'items' => 'マッサージ機',
'story' => 'いつも家族のために頑張っているお父さんへ。日頃の疲れを癒してもらおう',
'price' =>8300,
'kind' =>5,
'item_brand' => 'マッサージ機',
'img_path'=>'https://tshop.r10s.jp/kagustyle/cabinet/main/014/k_main-15550.jpg'
],
[
'id' =>181,
'gender' =>2,
'items' => 'フラワーライト',
'story' => '暗いところでもお花を楽しめる。お花好きの母親にお洒落なインテリアグッズとして…。',
'price' =>3200,
'kind' =>3,
'item_brand' => 'フラワーライト',
'img_path'=>'https://tshop.r10s.jp/aromdee-select/cabinet/frangipani-lamp/img60165388.jpg'
],
[
'id' =>182,
'gender' =>1,
'items' => 'デジタルフォトフレーム',
'story' => '大切な家族の思い出と日頃の感謝の気持ちとともに送ろう。',
'price' =>13200,
'kind' =>5,
'item_brand' => 'デジタルフォトフレーム',
'img_path'=>'https://tshop.r10s.jp/jism/cabinet/0659/4534782950223.jpg'
],
[
'id' =>183,
'gender' =>2,
'items' => 'ドリンキングメガネストロー',
'story' => '友達の誕生日会に持っていけば、盛り上がるかも。',
'price' =>600,
'kind' =>1,
'item_brand' => 'ドリンキングメガネストロー',
'img_path'=>'https://tshop.r10s.jp/stylifemen/cabinet/item/207/u66207-01_1.jpg'
],
[
'id' =>184,
'gender' =>2,
'items' => 'キーピート',
'story' => 'よく鍵をなくして慌てている友達に。これからは鍵なくさないでね。',
'price' =>1800,
'kind' =>2,
'item_brand' => 'キーピート',
'img_path'=>'https://tshop.r10s.jp/hideout/cabinet/leadworks/fred/imgrc0065535699.jpg'
],
[
'id' =>185,
'gender' =>2,
'items' => '豆腐一丁(付箋)',
'story' => 'プレゼントに豆腐？！と見せかけての面白付箋。ネタ系プレゼントとしてはばっちり。',
'price' =>600,
'kind' =>1,
'item_brand' => '豆腐一丁',
'img_path'=>'https://tshop.r10s.jp/arune/cabinet/00585754/bn-363248.jpg'
],
[
'id' =>186,
'gender' =>2,
'items' => 'イケメン付箋',
'story' => 'あの子は、どのイケメンが好みかな。イケメンに胸キュンセリフを言わせてプレゼントすれば喜ばせること間違いなし。',
'price' =>470,
'kind' =>1,
'item_brand' => 'イケメン付箋',
'img_path'=>'https://tshop.r10s.jp/8989usagiya/cabinet/389/imgrc0071879748.jpg'
],
[
'id' =>187,
'gender' =>2,
'items' => 'Leaf Thermometer(色で感じる温度計)',
'story' => '葉っぱ型の温度計。おしゃれな友達の部屋にもぴったりかも。',
'price' =>700,
'kind' =>1,
'item_brand' => 'Leaf Thermometer',
'img_path'=>'https://tshop.r10s.jp/y-works/cabinet/plus_d/pl-d2/leeeaf.jpg'
],
[
'id' =>188,
'gender' =>2,
'items' => 'リップ灰皿',
'story' => '煙草を吸う女友達にちょっとセクシーな灰皿。でも煙草の吸いすぎはだめだよ。',
'price' =>1100,
'kind' =>2,
'item_brand' => '唇　灰皿',
'img_path'=>'https://tshop.r10s.jp/monocco/cabinet/0029/nyc2868c020.jpg'
],
[
'id' =>189,
'gender' =>2,
'items' => 'key finder',
'story' => 'また鍵なくしたの。そんな友達に。これなら無くしてもすぐに見つけられるよ。',
'price' =>1200,
'kind' =>2,
'item_brand' => 'key finder',
'img_path'=>'https://tshop.r10s.jp/gold/auc-auto-phoenix/images/05360a.jpg'
],
[
'id' =>190,
'gender' =>2,
'items' => 'iphone　扇風機',
'story' => '暑い夏のちょっとしたプレゼントにはぴったり。',
'price' =>550,
'kind' =>1,
'item_brand' => ' iphone　扇風機',
'img_path'=>' https://tshop.r10s.jp/fiara1/cabinet/05623066/imgrc0068668343.jpg'
],
[
'id' =>191,
'gender' =>2,
'items' => ' LEDライトアップグラス',
'story' => '家でもおしゃれな雰囲気が味わえる。',
'price' =>550,
'kind' =>1,
'item_brand' => ' LEDライトアップグラス',
'img_path'=>' https://tshop.r10s.jp/acomes/cabinet/item10/53108.jpg'
],
[
'id' =>192,
'gender' =>2,
'items' => 'ムーミンサシェ　ルームフレグランス',
'story' => '部屋中いい香りに。これを使ってリラックスしてね。',
'price' =>540,
'kind' =>1,
'item_brand' => 'ムーミンサシェ',
'img_path'=>'https://tshop.r10s.jp/richcandle/cabinet/gpp3/mmrk17.jpg'
],
[
'id' =>193,
'gender' =>1,
'items' => 'コーヒーブックマーク',
'story' => 'コーヒー好きなお父さんに、今回はコーヒーではなく、コーヒー型のブックマークを。',
'price' =>1944,
'kind' =>5,
'item_brand' => 'コーヒーブックマーク',
'img_path'=>'https://tshop.r10s.jp/tokusan-hin/cabinet/netsea/netsea-6396/6396-4/ns6396-aa030801.jpg'
],
[
'id' =>194,
'gender' =>2,
'items' => 'ロバミルク　石鹸',
'story' => 'パッケージがかわいいから、ゆるふわなあの子に送ります。顔だけでなく、全身にも使える石鹸。',
'price' =>993,
'kind' =>1,
'item_brand' => 'ロバミルク　石鹸',
'img_path'=>'https://tshop.r10s.jp/jewel-world/cabinet/s177/pw-68163.jpg'
],
[
'id' =>195,
'gender' =>2,
'items' => 'シープケーブルホルダー',
'story' => 'イヤホンや充電器のコードを可愛く、整理できるグッズ。誰にあげても役立つ一品。',
'price' =>540,
'kind' =>1,
'item_brand' => 'シープ　ケーブルホルダー',
'img_path'=>'https://tshop.r10s.jp/sanchome-market/cabinet/d/d-990.jpg'
],
[
'id' =>196,
'gender' =>2,
'items' => 'オーベントウ/たためるお弁当箱',
'story' => 'いつもおいしそうなお弁当を作ってきている同期の女の子。たためるお弁当箱だと持ち運びに便利だし、喜んでもらえそう。',
'price' =>918,
'kind' =>1,
'item_brand' => 'オーベントウ',
'img_path'=>'https://tshop.r10s.jp/jetprice/cabinet/243/592269.jpg'
],
[
'id' =>197,
'gender' =>2,
'items' => 'イニックコーヒー',
'story' => 'パッケージデザインがとても可愛くて気に入りました。友達にあげるために探していたけど、自分にも買おうかな。',
'price' =>918,
'kind' =>1,
'item_brand' => 'イニックコーヒー',
'img_path' => 'https://tshop.r10s.jp/nuts/cabinet/nuts_gazo/item_food/imgrc0064291098.jpg'
],
[
'id' =>198,
'gender' =>2,
'items' => '竹とんぼ風鉛筆',
'story' => 'イライラして鉛筆投げちゃう前に、そのストレスを鉛筆と一緒に大空へ飛ばそう！！！！',
'price' =>540,
'kind' =>1,
'item_brand' => '竹とんぼ　鉛筆',
'img_path'=>'https://tshop.r10s.jp/denden-dou/cabinet/h-d/hd-z/byun-16.jpg'
],
[
'id' =>199,
'gender' => 1,
'items' => 'シューシャインセット',
'story' => '「パリではね、女の子はとびっきりいい靴を履きなさいっていわれてるの。そうすれば靴が自然と素敵なところへ連れてってくれるんですって」　ｂｙ　花より男子',
'price' =>5800,
'kind' =>5,
'item_brand' => 'シューシャインセット',
'img_path'=>'https://tshop.r10s.jp/primeavenue/cabinet/saphir/imgrc0089330554.jpg'
],
[
'id' =>200,
'gender' =>2,
'items' => 'アルコール摂取適量 ジョッキ',
'story' => 'いつもお酒飲みすぎて失敗してる友達に。適度な量でお酒を楽しんでね。',
'price' =>2000,
'kind' =>1,
'item_brand' => 'アルコール摂取適量 ジョッキ',
'img_path'=>'https://tshop.r10s.jp/lightnetshop/cabinet/00045/001651.jpg'
],
[
'id' =>201,
'gender' =>2,
'items' => '自動コーヒー混合カップ',
'story' => '極度にめんどくさがりな友達にばっちりなプレゼント。',
'price' =>2280,
'kind' =>1,
'item_brand' => '自動コーヒー混合カップ',
'img_path'=>'https://tshop.r10s.jp/elelerueru/cabinet/oota/04594834/imgrc0064363179.jpg'
],
[
'id' =>202,
'gender' =>2,
'items' => 'THERMOS　真空断熱タンブラー',
'story' => 'ドリンクをいつも飲み頃で持ち運ぶ。300mlなら1000円前後でプレゼントできます。',
'price' =>1300,
'kind' =>1,
'item_brand' => 'THERMOS　真空断熱タンブラー',
'img_path'=>' https://tshop.r10s.jp/mount-plus/cabinet/d6359108.jpg'
],
[
'id' =>203,
'gender' =>2,
'items' => 'ラテマシュマロ',
'story' => 'おうちでもかわいいラテドリンクが楽しめる。',
'price' =>1500,
'kind' =>1,
'item_brand' => 'ラテマシュマロ',
'img_path'=>' https://tshop.r10s.jp/aionline-japan/cabinet/sweets4/latte-mash-3new.jpg '
],
[
'id' =>204,
'gender' =>2,
'items' => 'フルーツメモ帳',
'story' => '本物の果物のようなかわいいメモ帳。',
'price' =>550,
'kind' =>1,
'item_brand' => 'フルーツメモ帳',
'img_path'=>'https://tshop.r10s.jp/plusnao/cabinet/itempic0646/zak-jozvie-1.jpg'
],
[
'id' =>205,
'gender' =>1,
'items' => 'いびき防止　枕',
'story' => 'いびきがうるさすぎるお父さんへ。もっと熟睡できるようにこの枕をプレゼント。お母さんも喜んでます。',
'price' =>8000,
'kind' =>5,
'item_brand' => 'いびき防止　枕',
'img_path'=>'https://tshop.r10s.jp/furfurmouton-tokyo/cabinet/05978687/05978688/05978692/imgrc0069418875.jpg'
],
[
'id' =>206,
'gender' =>1,
'items' => 'Yogibo　人をだめにするクッション',
'story' => 'まさに人をだめにするクッション！これで私の家族はだめになりました。',
'price' =>30000,
'kind' =>5,
'item_brand' => 'Yogibo',
'img_path'=>'https://tshop.r10s.jp/yogibo/cabinet/products/mainpict/pod.jpg'
],
[
'id' =>207,
'gender' =>1,
'items' => 'レイコップ　布団クリーナー',
'story' => '家族みんなが気持ちよく寝れますように。',
'price' =>15000,
'kind' =>5,
'item_brand' => 'レイコップ　布団クリーナー',
'img_path'=>'https://tshop.r10s.jp/hikaritv/cabinet/gazo3/2010025603.jpg'
],
[
'id' =>208,
'gender' =>2,
'items' => 'marimekkoのポーチ',
'story' => '北欧初のユニークでおしゃれなデザインが魅力。カラフルでもモノトーンでも♪',
'price' =>3000,
'kind' =>3,
'item_brand' => 'マリメッコ　ポーチ',
'img_path'=>'https://tshop.r10s.jp/cosmelink/cabinet/zakka2/6411254393246_mark.jpg'
],
[
'id' =>209,
'gender' =>2,
'items' => 'JILL STUARTの香水',
'story' => '大人っぽさ、爽やかさ、かわいらしさを兼ね備えた完璧な香水。洗練された美しい香りをプレゼント',
'price' =>2980,
'kind' =>3,
'item_brand' => 'ジルスチュアート　香水',
'img_path'=>'https://tshop.r10s.jp/lunadea/cabinet/jillstuart/img59919799.jpg?fitin=275:275'
],
[
'id' =>210,
'gender' =>2,
'items' => 'LUSHのギフトセット',
'story' => '箱から可愛いLUSHのギフトボックス！もらったらテンション上がります。日々のお風呂が楽しみになる♪',
'price' =>3800,
'kind' =>3,
'item_brand' => 'ラッシュ　ギフトボックス',
'img_path'=>'https://tshop.r10s.jp/marz-shop/cabinet/img04/lush-037.jpg?fitin=275:275'
],
[
'id' =>211,
'gender' => 2,
'items' => 'LADUREEのトートバック',
'story' => 'マカロンが美味しいラデュレは、小物もかわいい！使いやすいトートバッグやランチバッグだと重宝します♡',
'price' =>2780,
'kind' =>3,
'item_brand' => 'スクレラデュレ　トートバッグ',
'img_path'=>'https://tshop.r10s.jp/palmspalms/cabinet/01722952/01742783/petits-s-rose-1.jpg'
],
[
'id' =>212,
'gender' =>2,
'items' => 'Cath Kidstonのランチバッグ',
'story' => '華やかで明るいCath Kidstonだから、持っているとハッピーになれる！',
'price' =>3360,
'kind' =>3,
'item_brand' => 'キャスキッドソン　ランチバッグ',
'img_path'=>' https://tshop.r10s.jp/oxeselect/cabinet/oxe10/ca754927.jpg'
],
[
'id' =>213,
'gender' =>2,
'items' => 'SWAROVSKIのボールペン',
'story' => '社会人になっても、かわいいボールペンを使いたいという要望に応えます♪とびきり可愛い♡',
'price' =>3450,
'kind' =>3,
'item_brand' => 'スワロフスキー　ボールペン',
'img_path'=>'https://tshop.r10s.jp/shop-aer/cabinet/swarovski/5224384_1.jpg'
],
[
'id' =>214,
'gender' =>2,
'items' => 'SWAROVSKIのブレスレット',
'story' => 'シンプルだけど遊び心のあるSWAROVSKIは、親友へのプレゼントならブレスレットがおすすめ！',
'price' =>7980,
'kind' =>3,
'item_brand' => 'スワロフスキー　ブレスレット',
'img_path'=>' https://tshop.r10s.jp/culture/cabinet/1502-pic14/sw-5073592_1.jpg '
],
[
'id' =>215,
'gender' =>2,
'items' => 'YVES SAINT LAURENTのマニキュア',
'story' => '誰もが憧れるサンローラン。マニキュアも上質で、手が届くお値段で買えます。赤がおすすめ！',
'price' =>2683,
'kind' =>3,
'item_brand' => 'イブサンローラン　マニキュア',
'img_path'=>' https://tshop.r10s.jp/cosmeprima/cabinet/2015_3/264085.jpg'
],
[
'id' =>216,
'gender' =>2,
'items' => 'GODIVAのチョコレート',
'story' => 'なかなか買わない高価なお菓子こそ、もらって嬉しい♡　親友に送るなら、少し高めのGODIVAはいかが？',
'price' =>4860,
'kind' =>3,
'item_brand' => 'ゴディバ　チョコレート',
'img_path'=>' https://tshop.r10s.jp/godiva/cabinet/products2/179940_2.jpg'
],
[
'id' =>217,
'gender' =>2,
'items' => ' Agnes b.のポーチ',
'story' => '人気のアニエスベーは、ポーチなどの小物も可愛い！親友とお揃いで持っても◎',
'price' =>10000,
'kind' =>3,
'item_brand' => 'アニエスベー　ポーチ',
'img_path'=>' https://tshop.r10s.jp/paris-lounge/cabinet/agnes/10773597_8_d.jpg'
],
[
'id' =>218,
'gender' =>2,
'items' => 'Paul&JOEのコンパクトファンデーション',
'story' => ' 毎日使うファンデーションは、ケースも可愛いものを♪',
'price' =>4100,
'kind' =>3,
'item_brand' => 'ポールアンドジョー　コンパクトファンデーション',
'img_path'=>'https://tshop.r10s.jp/regalo-c/cabinet/01376929/img68276498.jpg '
],
[
'id' =>219,
'gender' =>2,
'items' => 'ANNASUIの鏡 ',
'story' => '大人のたしなみとして、ミラーを持ち歩いてささっと身だしなみチェック。おしゃれな鏡だと印象もアップします。 ',
'price' =>1890,
'kind' =>3,
'item_brand' => 'アナスイ　鏡',
'img_path'=>'https://tshop.r10s.jp/cosmeland/cabinet/2014_2/236407.jpg '
],
[
'id' =>220,
'gender' =>2,
'items' => 'Diorのマスカラ',
'story' => 'まつ毛は女の命。良いマスカラならまつ毛にもいいし、夜までばっちりカールをキープしてくれます♪ ',
'price' =>3330,
'kind' =>3,
'item_brand' => 'ディオール　マスカラ',
'img_path'=>'https://tshop.r10s.jp/cosmeland/cabinet/2017_3/205988_1.jpg '
],
[
'id' =>221,
'gender' =>2,
'items' => 'Agnes.bのTシャツ',
'story' => '人気のアニエスベーTシャツは、シンプルでどんなプレゼントにも合わせやすい！モノトーンが可愛いです♡ ',
'price' =>10800,
'kind' =>3,
'item_brand' => 'アニエスベー　Tシャツ',
'img_path'=>'https://image.rakuten.co.jp/rush-mall/cabinet/img13/agnesb-apa004_1.jpg '
],
[
'id' =>222,
'gender' =>2,
'items' => ' THE BODY SHOPのボディバター',
'story' => 'お風呂あがりのマッサージに欠かせないボディバターは、ボディショップが定番♪種類も充実しています♡',
'price' =>2000,
'kind' =>3,
'item_brand' => 'ボディショップ　ボディバター',
'img_path'=>'https://tshop.r10s.jp/cosmelink/cabinet/body2/5028197557911_mark.jpg'
],
[
'id' =>223,
'gender' =>2,
'items' => 'ミキサー',
'story' => ' スムージー好きな親友へ♡ ほかの人がなかなかあげなさそうなものをチョイス！',
'price' =>4730,
'kind' =>3,
'item_brand' => 'ミキサー',
'img_path'=>'https://tshop.r10s.jp/life-navi/cabinet/200-24/a0049381.jpg'
],
[
'id' =>224,
'gender' =>2,
'items' => 'MARY QUANTのキーホルダー ',
'story' => ' 鍵だって、毎日可愛く持ち歩きたい！おしゃれなマリクワで♡',
'price' =>5184,
'kind' =>3,
'item_brand' => 'マリークワントのキーホルダー',
'img_path'=>' https://tshop.r10s.jp/ace-web/cabinet/01577693/5017121201-mq-11-2.jpg'
],
[
'id' =>225,
'gender' =>1,
'items' => 'A5ランクの松坂牛',
'story' => '家族団らんをするなら、美味しいお肉をみんなで囲んで。すき焼きや焼き肉、しゃぶしゃぶも美味しい',
'price' =>12000,
'kind' =>5,
'item_brand' => '松坂牛',
'img_path'=>'https://tshop.r10s.jp/matsuyoshi/cabinet/03133366/imgrc0065435253.jpg'
],
[
'id' =>226,
'gender' =>1,
'items' => 'STUSSYのパーカー',
'story' => 'おしゃれな男兄弟へ。パーカーなら重宝するはず！',
'price' =>10000,
'kind' =>5,
'item_brand' => 'ステューシー　パーカー',
'img_path'=>'https://tshop.r10s.jp/delicious/cabinet/57/16000757_1.jpg'
],
[
'id' =>227,
'gender' =>1,
'items' => 'New eraのキャップ',
'story' => '男女ユニセックスで使えるNew era。値段的にもちょうどいいプレゼント！',
'price' =>5390,
'kind' =>5,
'item_brand' => 'ニューエラ　キャップ',
'img_path'=>'https://tshop.r10s.jp/rds/cabinet/newera/newera-02-1.jpg'
],
[
'id' =>228,
'gender' =>1,
'items' => 'おじいちゃんどら焼き',
'story' => '和食が大好きなおじいちゃん。メッセージ入りのどら焼きをあげれば、喜んでくれること間違いなし！',
'price' =>1620,
'kind' =>5,
'item_brand' => 'おじいちゃん　どら焼き',
'img_path'=>'https://tshop.r10s.jp/aionline-japan/cabinet/sweet03/fd-31.jpg'
],
[
'id' =>229,
'gender' =>1,
'items' => 'LACOSTEのポロシャツ',
'story' => 'お父さんにも、兄弟にも！誰にあげても喜ばれるマルチアイテム！夏にピッタリなポロシャツを',
'price' =>8000,
'kind' =>5,
'item_brand' => 'ラコステ　ポロシャツ',
'img_path'=>'https://tshop.r10s.jp/auc-roman/cabinet/05528745/1bn90.jpg'
],
[
'id' =>230,
'gender' =>1,
'items' => 'RALPH LAURENのYシャツ',
'story' => 'お仕事で使えるYシャツは、社会人のお兄ちゃん、兄弟や、スーツをおしゃれに着たい大学生の兄弟にも',
'price' =>6300,
'kind' =>5,
'item_brand' =>'ラルフローレン　ワイシャツ',
'img_path'=>'https://tshop.r10s.jp/frames/cabinet/frames002/ralph-580023-top3.jpg',
],
[
'id' =>231,
'gender' =>1,
'items' => 'おじいちゃんの帽子',
'story' => '歳をとってもおしゃれなおじいちゃんへ。これをかぶってたくさんお出かけしてね♪',
'price' =>3000,
'kind' =>5,
'item_brand' => 'おじいちゃん　帽子',
'img_path'=>'https://tshop.r10s.jp/hatshop/cabinet/item108/imgrc0069510520.jpg'
],
[
'id' =>232,
'gender' =>2,
'items' => 'コロッケそっくりなレアチーズケーキ',
'story' => '友達の家に遊びに行くときのちょっとしたお土産に。みんなで食べれば盛り上がる。',
'price' =>1500,
'kind' =>1,
'item_brand' =>'コロッケそっくりなレアチーズケーキ',
'img_path'=>'https://tshop.r10s.jp/gold/auc-drereal/pic/daiichi/normal/torayas005.jpg'
],
[
'id' =>233,
'gender' =>2,
'items' => 'たこ焼きそっくりなシュークリーム＆コロッケそっくりなレアチーズケーキ　セット',
'story' => '友達とタコパと思いきや、実は甘いものパーティー。',
'price' =>2000,
'kind' =>1,
'item_brand' => 'たこ焼きそっくりなシュークリーム',
'img_path'=>'https://tshop.r10s.jp/gold/umai-men/item1gazou/1p/sset5640-1p.jpg'
],
[
'id' =>234,
'gender' =>2,
'items' => '石チョコ',
'story' => '懐かしい石チョコ。みんなとシェアして楽しもう。',
'price' =>1300,
'kind' =>1,
'item_brand' => '石チョコ',
'img_path'=>'https://tshop.r10s.jp/azechi/cabinet/pd/stone-choc-pd1.jpg'
],
[
'id' =>235,
'gender' =>2,
'items' => 'モアイ　ティッシュケース',
'story' => '鼻水が辛そうな友人に。ジョークも含めて、プレゼントしました。笑ってくれました。',
'price' =>3000,
'kind' =>1,
'item_brand' => 'モアイ　ティッシュケース',
'img_path'=>'https://tshop.r10s.jp/fankle/cabinet/imgrc0076373128.jpg'
],
[
'id' =>236,
'gender' =>2,
'items' => 'すいか　バームクーヘン',
'story' => '平成最後の夏！！スイカ割りと見せかけて、スイカ型のバームクーヘン。みんなとシェアして楽しもう。',
'price' =>3680,
'kind' =>1,
'item_brand' => 'すいか　バームクーヘン',
'img_path'=>'https://tshop.r10s.jp/etaiyou/cabinet/soreiyu/suika/2018summer_suika.jpg'
],
[
'id' =>237,
'gender' => 1,
'items' => 'Starbucksのカード',
'story' => 'いつも頑張っているご褒美にと突然仲のいい先輩がくれたプレゼント。ちょっと頑張った日には、このカードでおいしいフラペチーノでも飲んじゃおう。',
'price' => 1000,
'kind' => 1,
'item_brand' => 'スタバカード',
'img_path'=>'https://tshop.r10s.jp/mtony/cabinet/04010877/imgrc0066821990.jpg'
],
[
'id' =>238,
'gender' =>1,
'items' => 'トランプ',
'story' => '一緒に遊べるプレゼントでフレンドシップを深めよう',
'price' => 500,
'kind' => 1,
'item_brand' => 'トランプ',
'img_path'=>'https://tshop.r10s.jp/badenbaden/cabinet/bicyclebridgesize01.jpg'
],
[
'id' =>239,
'gender' => 1,
'items' => 'ペンケース',
'story' => '気軽に学生さんに送れる最適なプレゼント',
'price' => 1000,
'kind' => 1,
'item_brand' => 'ペンケース',
'img_path'=>'https://tshop.r10s.jp/sentire/cabinet/itemimg137/pencase-mobile01.jpg'
], 
[
'id' =>240,
'gender' => 1,
'items' => 'ハンカチ',
'story' => 'このプレゼントで彼に清潔感を与えよう:桜:',
'price' => 1000,
'kind' => 1,
'item_brand' => 'ハンカチ　メンズ',
'img_path'=>'https://tshop.r10s.jp/glanage-leg/cabinet/takeokikuchi/2432129-mobile_01.jpg'
], 
[
'id' =>241,
'gender' => 1,
'items' => 'フェイスパック',
'story' => 'デートの前日、男子にも肌の状態をこのパックで整えよう！',
'price' => 1000,
'kind' => 1,
'item_brand' => 'フェイスパック　メンズ',
'img_path'=>'https://tshop.r10s.jp/trendb/cabinet/shohin13/imgrc0060914170.jpg'
], 
[
'id' =>242,
'gender' => 1,
'items' => '今治タオル',
'story' => '高品質にこだわった今治タオル、男女にも使いやすいおしゃれアイテム！',
'price' => 700,
'kind' => 1,
'item_brand' => '今治タオル',
'img_path'=>' https://tshop.r10s.jp/oruta/cabinet/bath/life_bt.jpg'
], 
[
'id' =>243,
'gender' => 1,
'items' => 'スナックディスペンサー',
'story' => 'レバーを押すと一口分のスナックが出てくるディスペンサー。
ジェリービーンズやチョコレートなどのお菓子を入れるのも良し。',
'price' => 1000,
'kind' => 1,
'item_brand' => 'スナックディスペンサー',
'img_path'=>' https://tshop.r10s.jp/sincere-watch/cabinet/img08/snackdispenser_002m.jpg'
], 
[
'id' =>244,
'gender' => 1,
'items' => '栽培キット',
'story' => '無農薬で安全安心！自分で育てた野菜は、愛着も美味しさもひとしお。',
'price' => 700,
'kind' => 1,
'item_brand' => '栽培キット',
'img_path'=>' https://tshop.r10s.jp/saienlife/cabinet/03728321/imgrc0094503318.jpg'
], 
[
'id' =>245,
'gender' => 1,
'items' => 'サボテン',
'story' => '抗菌、防汚、消臭の効果を持つサボテンをプレゼントに！',
'price' => 700,
'kind' => 1,
'item_brand' => 'サボテン',
'img_path'=>' https://tshop.r10s.jp/gold/hanaki-web/sif/plant/tanimaru.jpg'
], 
[
'id' =>246,
'gender' => 1,
'items' => '箸',
'story' => '幸せな食卓を思い浮かべながら、揃いのお箸のギフト。',
'price' => 1000,
'kind' => 1,
'item_brand' => '箸',
'img_path'=>' https://tshop.r10s.jp/wayukan/cabinet/05587132/imgrc0069235203.jpg'
], 
[
'id' =>247,
'gender' => 1,
'items' => 'ベートーベンディッシュ',
'story' => '頭の部分にパスタやおかずを盛りつければ、いつもと違う有名人が完成しちゃう楽しいお皿シリーズ♪',
'price' => 700,
'kind' => 1,
'item_brand' => 'ベートーベンディッシュ',
'img_path'=>' https://tshop.r10s.jp/partyparadise/cabinet/img-item/sa/sa-2208-1.jpg'
], 
[
'id' =>248,
'gender' => 1,
'items' => 'ドリンクタンブラー',
'story' => 'オフィスにも使えるドリンクタンブラー',
'price' => 900,
'kind' => 1,
'item_brand' => 'ドリンクタンブラー',
'img_path'=>'https://tshop.r10s.jp/kaiteki-e-senior/cabinet/05735262/olg004-g-3.jpg'
], 
[
'id' =>249,
'gender' => 1,
'items' => 'キーファインダー',
'story' => '財布、鍵、電話、ペットの迷子防止にも使える便利な探し物発見器',
'price' => 500,
'kind' => 1,
'item_brand' => 'キーファインダー',
'img_path'=>'https://tshop.r10s.jp/mirain/cabinet/7a/f0301-7a_1.jpg'
], 
[
'id' =>250,
'gender' => 1,
'items' => 'ハナがタップ',
'story' => '見た目のインパクト大！何ともシュールなこの風貌。',
'price' => 2000,
'kind' => 1,
'item_brand' => 'コンセント　鼻型',
'img_path'=>' https://tshop.r10s.jp/plywood/cabinet/kaden4/13534003.jpg'
], 
[
'id' =>251,
'gender' => 1,
'items' => 'キーホルダー',
'story' => '旅帰りに気軽に送れるアイテム！',
'price' => 500,
'kind' => 1,
'item_brand' => 'キーホルダー',
'img_path'=>'https://tshop.r10s.jp/e-mono-online-shop/cabinet/items/mobac/mb-0070_img01_n.jpg'
], 


]);
}
}
			

