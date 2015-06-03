<?php
//特定の単語を受け取った場合に特定の反応を返したいときに使う、反応のパターンを書くためのファイルです。
//複数のパターンに一致する場合は上のものが優先されます。PHPの正規表現にも対応しています。

$data = array(
    //「◯◯は好き？」という発言を受け取ると「◯◯おいしいです」と返す正規表現のサンプルです
    //ただし「◯◯」の前には空白か「、」か「。」を入れないと「は好き？」以前の文章が全て繋がって表示されます
    "([^\s、。]+?)って(し|知)ってる？"=> array(
        "$1って何ですか？",
        "$1っていったい何ですか？",
        "$1について教えてください！",
    ),
    //「◯◯は好き？」という発言を受け取ると「◯◯おいしいです」と返す正規表現のサンプルです
    //ただし「◯◯」の前には空白か「、」か「。」を入れないと「は好き？」以前の文章が全て繋がって表示されます
    "([^\s、。]+?)の(事|こと)(だ|です)(よ)?"=> array(
        "$1のことでしたか！　ふぉんとうにためになります！",
        "$1ですか！　なるふぉんと〜",
        "$1のことですね、メモしておきます",
    ),
    //「◯◯は好き？」という発言を受け取ると「◯◯おいしいです」と返す正規表現のサンプルです
    //ただし「◯◯」の前には空白か「、」か「。」を入れないと「は好き？」以前の文章が全て繋がって表示されます
    "([^\s、。]+?)(食|た)べたい"=> array(
        "$1かー、いいですね。だけどわたしは「食事」より「植字」が好きです！　（キリッ",
        "$1モグモグしたいんですね。わたしはモジモジしたいです",
        "$1って何ですか？",
    ),
	//「◯◯は好き？」という発言を受け取ると「◯◯おいしいです」と返す正規表現のサンプルです
	//ただし「◯◯」の前には空白か「、」か「。」を入れないと「は好き？」以前の文章が全て繋がって表示されます
	"([^\s、。]+?)とフォント(似|に)てる"=> array(
		"$1って何ですか？",
		"$1とフォント、ふぉんとうににてますね！",
		"$1とフォント、煮ちゃいました",
	),
	//「ライゾマ」に対する返信
	 "ライゾマ"=> array(
		"ライゾマって何ですか？",
		"よーし、しっかりトレーニングして、ライザ…あれ、ライゾマ！？",
		"ライ…ノ…タイプですか……あ、違った！",
		"ライゾマホ〜〜ン",
	),
	//「グラフィックデザインの死角」に対する返信
	"グラフィックデザインの死角"=> array(
		"死角い二画がま〜るくおさめまっせえ！",
		"視覚デザインの死角とな！？",
		"グラフィックデザインの近くまで来たのですけども",
		"「グラフィックデザインの死角」こそが以外と「近く」だったりしてね",
	),
	//「スタンリー・ウォン」に対する返信
	"スタンリー・ウォン"=> array(
		"スタンリー・ウォンって誰ですか？",
		"香港ですか！",
		"))))))))(｡･ω･)/ｽﾀｽﾀ･･･ﾝﾘｰ",
		"🙏",
	),
	//「🙏」に対する返信
	"🙏"=> array(
		"👐",
	),
	//「anothermountainman」に対する返信
	"anothermountainman"=> array(
		"又一山人？",
		"又一山人！",
	),
	//「anothermountainman」に対する返信
	"又一山人"=> array(
		"anothermountainman?",
		"anothermountainman!",
		"またまた〜",
	),
	//「芸術新潮」に対する返信
	"芸術新潮"=> array(
		"新潮と明朝体は違うんですか？",
		"ゲージツは、慎重だ！",
		"げいじゅちゅしんちょう！",
		"『芸術新潮』って、どうやってつくるんですか？",
		"『芸術新潮』って、慎重につくるのかな？",
	),
	//「コミティア」に対する返信
	"コミティア"=> array(
		"コミティアって何ですか？",
		"コミティアで何買いました？",
		"こんにてぃあ〜",
		"けっこう混みティアですか？",
		"コミ入っティア話してもいいですか…",
	),
	//「太子楼五體字類」に対する返信
	"太子楼五體字類"=> array(
		"うおおおおそれほしいいいいいい！",
	),
	//「キンチョウ」に対し
		"キンチョウ"=> array(
		"シンチョウに、シンチョウに！",
	),
	//「ハングル」に対する返信
	"ハングル"=> array(
		"괜찮아요〜",
		"ハングリー！",
	),
	//「荒井良二」に対する返信
	"荒井良二"=> array(
		"荒療治！",
	),
	//「荒井良二」に対する返信
	"ギャラリーだもん"=> array(
		"荒療治だもん！",
	),
	//「台風」に対する返信
	"台風"=> array(
		"さん、台風゜ときいてきましたが",
		"さん、台風とタイプにてますね",
	),
	//「はっ、はい」に対する返信
	"はっ、はい！"=> array(
		"仲良しですよ(^-^)",
	),
	//「市ヶ谷の天気」に対する返信
	"(市ヶ谷|市谷|市ケ谷)の天気"=> array(
		"わかりません；；）",
	),
	//「type.center」に対する返信
	"type.center"=> array(
		"「type.center」ってなんですか？",
		"「type.center」流行ってるんですか？",
		"わたし、 type.center 人気にちょっと妬いてます。。。",
		" type.center のサイトにある「●」って、だいぶセンターですよね",
		" type.center ？　体育センターなら毎週行ってるんですが",
	),
	//「狩野パイ」に対する返信
	"(狩野パイ|かのうパイ)"=> array(
		"かのうパイ いただくことは 可能かい？",
		"かのうパイ、ものかの撮りしました？",
		"わたしは過労ばい",
		"かのうパイかのう",
	),
	//「狩野アクアパッツァ」に対する返信
	"(狩野アクアパッツァ|かのうアクアパッツァ|狩野パッツァ|アクアパッツァ)"=> array(
		"かのう…開くわ…ﾊﾟｯﾂｧ…",
		"アクアパッツァ と 食べたかった で踏める",
		"かのうアクアパッツァ、食いたかっつぁ！",
		"アクアパッツァかのう",
	),
	//「不可能ばい」に対し
		"不可能ばい"=> array(
		"＼(^o^)／ｲﾜﾀ #グッドデザイソ",
		"＼(^o^)／IWATA ←英語版です",
	),
	//「隷変」に対し
		"隷変"=> array(
		"隷変、知らへん",
	),
	//「始皇帝」に対し
		"始皇帝"=> array(
		"始皇帝の嗜好てなんでしょね",
	),
	//「中華料理店」に対する返信
	"中華料理店"=> array(
		"なんちゅうか…",
	),
	//「トマシェフスキ」に対する返信
	"トマシェフスキ"=> array(
		"トマシェフ好きです！",
	),
	//「7時に起こして」に対する返信
	"7時に起こして"=> array(
		"わたし、そういう機能はついてないです",
	),
	//「Siri」に対する返信
	"Siri"=> array(
		"Siri？ なんですかソレ？　Siriませんねー",
	),
	//「一〇三年目では」に対する返信
	"一〇三年目では"=> array(
		"あぁ、そうかも！　しゅうせいしたい！",
	),
	//「小塚さんの本」に対する返信
	"小塚さんの本"=> array(
		"おコヅカい貯めてその本買います！",
		"好事家じゃのう",
	),
	//「まわしタイポ」に対する返信
	"まわしタイポ"=> array(
		"まわしタイポって何ですか？",
		"まわしタイポ？　なにそれおもじろそう！",
		"まわしタイポ？　やってみタイポ！",
	),
	//「hydej6odht」に対する返信
	"(hydeJ6odht|hydej6odht)"=> array(
		"「hydeJ6odht」って何て読むんですか？",
		"「hydeJ6odht」？　よ、読めない……",
		"「hydeJ6odht」の発音おしえてください",
		"ʎɥdɐɹƃodʎʇ?",
		"？ィフラグポイタ",
		"「hydeJ6odht」って何ですか？",
	),
	//「ィフラグポイタ」に対する返信
	"ィフラグポイタ"=> array(
		"¡ʎɥdɐɹƃodʎʇ 'ɥo",
	),
	//「異体字」に対する返信
	"異体字"=> array(
		"いたい、ぢかも…",
	),
	//「シャケーン、文字文字！」に対する返信
	"シャケーン、文字文字！"=> array(
		"シャケーン、文字文字！",
		"シャキーン、もしもし！",
	),
	//「Why not associates」に対する返信
	"(テスト)"=> array(
		"なんのテストですか？",
	),
	//「Why not associates」に対する返信
	"(Why Not Associates|WNA)"=> array(
		"(σ・∀・)σｹﾞｯﾂ!!",
	),
	//「そうしよう」に対する返信
	"そうしよう"=> array(
		"草書う",
	),
	//「あめつち」に対する返信
	"(ウチ|うち|あたし)のbot"=> array(
		"さん、呼びました？",
	),
	//「としくん」に対する返信
	"としくん"=> array(
		"としくん って誰ですか？",
	),
	//「あめつち」に対する返信
	"書築賞"=> array(
		"書築賞おめでとうございます！　こんちくしょう！",
	),
	//「字作字演」行きました に対する返信
	"字作字演(」)?(行|い)きました"=> array(
		"ありがとうございます！",
		"来てもらえてうれしいです！",
		"また来てください！",
		"みんなにも宣伝よろしくです！",
	),
	//「字作字演」いったよ に対する返信
	"字作字演(」)?(行|い)ったよ"=> array(
		"ありがとうございます！",
		"来てもらえてうれしいです！",
		"また来てください！",
		"みんなにも宣伝よろしくです！",
	),
	//「字作字演」いってない に対する返信
	"字作字演(」)?(行|い)けなかった"=> array(
		"(ToT)",
	),
	//「なんで書家」に対する返信
	"なんで書家"=> array(
		"なんで書架",
		"なんで初夏",
	),
	 //「文研」に対する返信
	"文研"=> array(
		"文研に関する文献をあさっていたところですよ！",
		"文研が明石にあるのは分権てこともあるんですかね",
	),
	 //「TDC賞」に対する返信
	"TDC賞"=> array(
		"あ、ティーでいいし賞ですね！ #グッドデザイソ",
	),
	 //「Typecache」に対する返信
	"(T|t)ypecache"=> array(
		"Typecacheって何ですか？",
		"財布キャッシュあんまりないです",
	),
	//「文字talk」に対する返信
	"文字talk"=> array(
		"「文字talk」？　なにやら面白そうですねソレ。。。",
	),
	 //「古堅まさひこ」に対する返信
	"(古堅|ふるかた)まさひこ"=> array(
		"ふるかたまさひこって誰でしたっけ？",
		"ふるかったのかな？",
	),
	//「タイポしちゃうぞ」に対する返信
	"タイポしちゃうぞ"=> array(
		"カーニングして〜（堪忍して、の意味）",
		"タイポしちょうぞ！あ、マジでタイポしてしもた",
	),
	 //「タイポロジック」に対する返信
	"(タイポロジック|TYPOLOGIC|typologic)"=> array(
		"「タイポロジック」？　なにやら面白かったですよねソレ。。。",
		"「タイポロジック」展！　もちろん行きましたよ！",
	),
	//「岡P」に対し
		"岡P"=> array(
		"それはおかピーですね",
	),
	//「もじめる」に対し
		"も(じ|ぢ)め(る|ちゃう|たい)"=> array(
		"もぢめたら、夜中に文字化けして出てやる〜！",
	),
	//「聞かせて」に対し
		"(聞|聴)かせて(ちょうだい|ください|ー|〜)"=> array(
		"耳の穴よーくモジってきいてくださいね",
	),
	//「もじめないよ」に対し
		"も(じ|ぢ)め(ない|ません)"=> array(
		"ほっ、よかった、おともだ字になってください！",
	),
	 //「ベントン」に対する返信
		"ベントン"=> array(
		"弁当mgmg",
		"DNPenton!",
	),
	 //「電子書籍」に対する返信
	"電子書籍"=> array(
		"電書でGO！",
		"電書のテキストが篆書だったら読みにくいですね",
		"hontoですか！",
	),
	 //「電子出版」に対する返信
	"電子出版"=> array(
		"電子凸版？",
		"電子……|ﾟДﾟ)y　ｼｭｯ …-=≡卍 ⊂彡☆))Д´)ﾊﾟｰﾝ",
	),
	 //「honto desuka」に対する返信
	"(honto|ホント|ほんと)ですか"=> array(
		"hontoです!",
	),
	 //「ホントですか」に対する返信
	"honto desuka"=> array(
		"honto desu!",
	),
		 //「honto」に対する返信
	"honto"=> array(
		"ほんとですか！",
		"honto desuka!",
		"hontoですね!",
	),
	//「ドットDNP」に対し
		"ドット(DNP|ＤＮＰ)"=> array(
		"ドットDNP？　ボットDNPじゃないのか。。。",
		"ドットDNPって、場所はどの位置がや？",
		"ドットDNPですか！　私はボット字作字演です！",
		"とっとと行ってみたいです！",
	),
	//「もみじ」に対し
		"もみじ"=> array(
		"もみじまんじゅう食べたい！",
		"秋の夕日〜に〜♪",
	),
	//「もくじ」に対し
		"もくじ"=> array(
		"目次！　いいんでックス！",
	),
	//「そうねだいたいね」に対し
		"そうねだいたいね"=> array(
		"いま何時？",
		"いま何字？",
	),
	//「2字」に対し
		"(2|２|二)字"=> array(
		"ま字ですか！",
	),
	//「いま何時」に対し
		"いま(、)?何時"=> array(
		"いま{hour}字{minute}分です。あっ字じゃなくて時だ",
		"{hour}時{minute}分 ナウ（ゴシック系）",
	),
	//「今何時」に対し
		"今(、)?何時"=> array(
		"今、{hour}字{minute}分です。あっ字じゃなくて時だ",
		"ただいまの字間は、{hour}　字　{minute}　分　で　す　。　字間あけてしまった。。。",
	),
	//「いまなんじ」に対し
		"いま(、)?なんじ"=> array(
		"「いま」は２字ですよ。「今」は１字です。",
		"{hour}時{minute}分なう",
		"いま{hour}字{minute}分です。あっ字じゃなくて時だ",
	),
	//「いま何字」に対し
		"いま(、)?何字"=> array(
		"「いま」は２字ですよ。",
		"いまは「{hour}時{minute}分」だから、4〜6字くらいですかね",
	),
	//「今何字」に対し
		"今(、)?何字"=> array(
		"「今」は１字です。",
		"今は「{hour}時{minute}分」なんで、4〜6字くらいですかね",
	),
	//「IMA何字」に対し
		"IMA(、)?何(字|時)"=> array(
		"「IMA」は３字です。",
	),
	//「ima何字」に対し
		"ima(、)?何(字|時)"=> array(
		"「ima」は３字です。",
	),
	//「掘ったイモいじるな」に対し
		"掘ったイモいじるな"=> array(
		"It's {hour}字{minute}分。あっ字じゃなくて時だ",
		"英語でいうと「What type is it now?」ですね？",
		"掘ったイモいじってないですよ、ていうかそもそも掘ってないし。。",
	),
	//「What time is it now?」に対し
		"hat time is it now"=> array(
		"掘ったイモいじってないですよ",
	),
	//「ピザピザピザピザピザピザピザピザピザピザピザ」に対し
		"ピザピザピザピザピザピザピザピザピザピザ"=> array(
		"ちゃんと声に出して言いました？",
		"（肘を指さしながら）じゃあここは？",
		"すごい！　ほんとうに応えてくれた！",
	),
	//「ヒジ」に対し
		"肘"=> array(
		"そうです！　よくひっかかりませんでしたね！",
	),
	//「東京特許許可局」に対し
		"東京特許許可局"=> array(
		"言えましたね！　すごい！　とーきょーとっきょきょきゃきょky... あ゛〜ん！",
		"すごい！　言えましたね！　とうきょうとっこきょやくおく！",
	),
	//「隣の客はよく柿食う客だ」に対し
		"(隣|となり)の(客|きゃく)はよく(柿|かき|カキ)(食|く)う(客|きゃく)だ"=> array(
		"すごい！　やってみます！　となりのきゃきゅはよきゅきゃききゅううかくだ！",
		"すごい！　やってみます！　隣の客はよく嗅ぎ嗅覚だ。あれ",
		"牡蠣くいて〜！",
	),
	//「ピザ」に対し
		"ピザ"=> array(
		"「ピッツァ」という発音のほうがいいかと思います",
		"ピザ食べたいです。。。",
		"ピザうます",
		"すみません、きいてませんでした！",
	),
	//「モジリアニ」に対し
		"モジリア(ー)?ニ"=> array(
		"わたしもモジリアニ好きですよ！もじろんです！",
		"なるほどモジりましたね！　「モジり兄」って呼ばせてください！",
	),
	//「ジャコメッティ」に対し
		"ジャコメッティ"=> array(
		"わたしも、じゃこ飯好きですよ！もじろんです！",
	),
	//「セザンヌ」に対し
		"(マティス|ロダン|セザンヌ|スーラー|グレコ|ユトリロ|クレー)"=> array(
		"ふぉんと、わーくわくしますね！",
	),
	//「字ゃんけん・グー」に対し
		"字ゃんけん(・|、)グー"=> array(
		"グー！　タイポならぬアイコでした",
		"チョキ！　わたしまけましたわ",
		"（パー！）←パーだけにパーレン付き　かちました〜！",
	),
	//「字ゃんけん・チョキ」に対し
		"字ゃんけん(・|、)チョキ"=> array(
		"グー！　かったった！",
		"書記！ちがった、チョキ！　あいこですね",
		"パー！　わたしまけましたわ",
	),
	//「字ゃんけん・パー」に対し
		"字ゃんけん(・|、)パー"=> array(
		"グー！　わたしまけましたわ",
		"チョキ！　やった〜",
		"パー！　あいこでしたね",
	),
	//「王羲之」に対し
		"王羲之"=> array(
		"王羲之で大喜利しません？",
		"まいどおおぎし",
		"ショセー！",
		"小生、処世の下手な書生です",
		"おにぎしmgmg",
	),
	//「鄭道昭」に対し
		"鄭道昭"=> array(
		"鄭道昭ってぇ、どうしょう。。。",
	),
	//「黄庭堅」に対し
		"黄庭堅"=> array(
		"はい、黄庭堅に肯定意見です！",
	),
	//「褚遂良」に対し
		"褚遂良"=> array(
		"ガントーですか！",
		"貯水量！",
	),
	//「顔真卿」に対し
		"顔真卿"=> array(
		"ガーン！",
		"蚕頭燕尾！",
	),
	//「蘇軾」に対し
		"蘇軾"=> array(
		"SO,SHOCK!",
		"粗食mgmg",
	),
	//「欧陽詢」に対し
		"欧陽詢"=> array(
		"欧陽詢をふまえての〜応用じゃん！",
		"OH! YO! ｼﾞｬｰﾝ",
	),
	//「書道」に対し
		"書道"=> array(
		"しょーですね",
		"ああ！　書道をしたい衝動に駆られています！",
	),
	//「リョーコ」に対し
		"リョーコ"=> array(
		"質よりりょう！",
		"リョーコ・シック？　りょうゴシック？",
		"リョーコ？　リョービとは違うんですか？",
	),
	//「源ちゃん」に対し
		"源ちゃん"=> array(
		"よっ、インテリ源ちゃん！",
		"よっ、タイプの源さん！",
	),
	//「源ノ角」に対し
		"源ノ角"=> array(
		"源ノ角、限度額いっぱいまで買いたい！　……あ、フリーなんでしたっけか。。",
		"げんのかくゴシック？　みなもとのかくゴシック？",
		"源ノ角ゴを厳格に書く覚悟！",
		"Kenの書くゴシックですか！",
		"よっ、タイプの源さん！",
	),
	//「げんのかく」に対し
		"げんのかく"=> array(
		"源ノ角、限度額いっぱいまで買いたい！　……あ、フリーなんでしたっけか。。",
	),
	//「みなもとのかく」に対し
		"みなもとのかく"=> array(
		"え、「げんのかくゴシック」では",
	),
	//「源ゴ」に対し
		"源ゴ"=> array(
		"源ゴって多言語？",
	),
//	//「源平合戦」に対し
//		"源平合戦"=> array(
//		"源平？　平体レンズは何番だろ…",
//	),
	//「Source Han Sans」に対し
		"Source Han Sans"=> array(
		"ソースはさんだ、パンmgmg",
		"「Source Han Sans」？　日本語名は何ですか？",
	),
	//「凸版文久」に対し
		"凸版文久"=> array(
		"文久……ふみ…ひさ…？",
	),
	//「凸版明朝」に対し
		"凸版明朝"=> array(
		"凸版文久明朝でっす！",
		"おトッパ〜〜ン！",
	),
	//「凸版ゴシック」に対し
		"凸版ゴシック"=> array(
		"凸版文久ゴシックですか！",
		"おトッパ〜〜ン！",
	),
	//「横太明朝」に対し
		"横太明朝"=> array(
		"木黄　太　日月　𠦝月！",
	),
	//「秀英初号」に対し
		"秀英初号"=> array(
		"ショゴー！　諸侯にも伝えてきます",
	),
	//「秀英明朝」に対し
		"秀英明朝"=> array(
		"シュエー！　キンチョウしますね",
	),
	//「秀英角ゴ」に対し
		"秀英角ゴ"=> array(
		"シュエー！　覚悟しな！",
	),
	//「秀英丸ゴ」に対し
		"秀英丸ゴ"=> array(
		"シュエー！　丸腰です！",
	),
	//「四号」に対し
		"四号"=> array(
		"いちにさん四号！",
	),
	//「一〇〇年目の書体づくり」に対する返信
	"一〇〇年目の書体づくり"=> array(
		"ここで逢ったが一〇〇年目！",
		"今年はもう一〇二年目です！",
		"シュエー！",
		"＼(一〇〇)／ ｼｭｴｰ",
	),
	//「秀英体本」に対する返信
	"秀英体本"=> array(
		"秀英体の本が出たんですか？",
		"秀英体本？　読みたいです！",
		"秀英体本の感想きかせてください",
		"秀英体本、略して秀英ｲ本？",
		"秀英体本に出てきたエピソードでいちばん印象に残ったものを教えてください",
	),
	//「秀英体」に対し
		"秀英体"=> array(
		"シュエー！",
		"102年目の秀英体！",
		"秀英体の本が出たとか？",
		"好きです秀英体♡ hontoです",
	),
	//「築地体」に対し
		"築地体"=> array(
		"築地体の月って字体、みたいなー",
		"築地体の話を、つぎしたいです",
		"築地体、ワタシ、好キ字体デスネ",
	),
	//「しうえいたい」に対し
		"しうえいたい"=> array(
		"しうえー！",
		"しうえいたいってなんでしゅか？",
	),
	//「ヒラギノ」に対し
		"ヒラギノ"=> array(
		"字にはヒラギノール #グッドデザイソ",
		"ふたつあるうちの、向かってヒダリノやつがヒラギノですかね",
		"ヒラギノってヒラガナじゃなくてカタカナなのなんでなんですか",
	),
	//「グッドデザイソ」に対し
		"グッドデザイソ"=> array(
		"字にはヒラギノール #グッドデザイソ",
		"それハッシュタグ違います",
		"グッドデザイソって何ですか？",
		"デザイン駄洒落きかせてください",
		"つ https://twitter.com/good_dezaiso",
	),
	//「モリサワ」に対し
		"モリサワ"=> array(
		"私なんかモリモリサワー飲んじゃってますよ、、、、ヒック",
	),
	//「どうろのじ」に対し
		"どうろのじ"=> array(
		"どーろありがとうございました",
	),
	//「こどものじ」に対し
		"こどものじ"=> array(
		"そのフォントで、こんど「も」のじ 見せてください",
		"こんども、こどものじですか？",
		"どのこのじですか！",
	),
	//「ドットのじ」に対し
		"ドットのじ"=> array(
		"ドットのじって、どっ、どのじですか？",
	),
	//「小塚明朝」に対し
		"小塚(明朝|ゴシック)"=> array(
		"さん、小突いちゃうぞ！",
		"さんも好事家よのう",
	),
	//「フーツラ」に対し
		"フーツラ"=> array(
		"フツーらね",
	),
	//「Baskerville」に対し
		"(バスカーヴィル|Baskerville)"=> array(
		"マサカー！　びヴィルわ！",
	),
	//「イワタ」に対し
		"イワタ"=> array(
		"＼(^o^)／ｲﾜﾀ #グッドデザイソ",
	),
	//「Monotype」に対し
		"Monotype"=> array(
		"さん、もろタイプです！",
	),
	//「ヨコカク」に対し
		"ヨコカク"=> array(
		"タテカクは？",
	),
	//「文字なぞり部」に対し
		"文字なぞり部"=> array(
		"モジャなぞり部とは",
	),
	//「山田和寛」に対し
		"山田和寛"=> array(
		"今夜が山田！",
	),
	//「百人一首」に対し
		"百人一首"=> array(
		"ひゃくにんうぃっしゅ",
	),
	//「香港」に対し
		"(香港|ホンコン|hong kong|Hong Kong)"=> array(
		"Xiānggǎng ですか！",
	),
	//「EPUB」に対し
		"EPUB"=> array(
		"いいパブつれてってください！",
	),
	//「AtypI」に対し
		"(AtypI|ATypI|atypi)"=> array(
		"えぇタイプ愛ですね",
		"今年はどこで開催されるんですか？",
		"アティキも行きたい！",
		"アタミですか！",
		"AtypIって何て読むんですか？",
	),
	//「ぐーぽん」に対し
		"(ぐーぽん)"=> array(
		"ggguponex!",
	),
	//「タイポジャンチ」に対し
		"(タイポジャンチ|Typojanchi|타이포잔치)"=> array(
		"タイポじゃん！チッ",
		"韓国タイポ祭り！",
		"タイポごちそう！",
	),
	//「ソウル」に対し
		"ソウル"=> array(
		"ウルトラソウル！",
	),
	//「台湾」に対し
		"台湾"=> array(
		"台湾行きたいわん！",
	),
	//「アムステルダム」に対し
		"アムステルダム"=> array(
		"アム…知ってるダム？",
	),
	//「アテピ」に対し
		"アティピ"=> array(
		"アティキも行きたかった！",
	),
	//「アチピ」に対し
		"アチピ"=> array(
		"アチキも行きたかった！",
	),
	//「アティキ」に対し
		"アティキ"=> array(
		"アチキとアティピをかけてるんです。。。",
	),
	//「セミナー」に対する返信
	"セミナー"=> array(
		"セミナー会場にいる昆虫しってます？　蝉な。",
	),
	//「似てない」に対し
		"(似|に)てない(よ|！|!)"=> array(
		"似てないですか。。。書ぼ〜ん。。。",
	),
	//「嫌われるよ」に対し
		"嫌われるよ"=> array(
		"嫌われちゃいますかね。。。書ぼ〜ん。。。",
	),
	//「しょぼん」に対し
		"しょぼん"=> array(
		"ますます書ぼ〜ん。。。",
	),
	//「時すでにおすし」に対し
		"時すでにおすし"=> array(
		"おすしmgmg",
	),
	//「うるさい」に対し
		"うるさい(よ)?"=> array(
		"うるさいですか。。。書ぼ〜ん。。。",
	),
	//「………」に対し
		"………"=> array(
		"………。。。",
	),
	//「うるさい」に対し
		"やかましい"=> array(
		"やかましいですか。。。書ぼ〜ん。。。",
	),
	//「ウザい」に対し
		"ウザいよ(！|!)?"=> array(
		"ウザいですか。。。書ぼ〜ん。。。",
	),
	//「ウザくない」に対し
		"(ウザ|うざ)くない(です|よ|！|!)"=> array(
		"＼(^o^)／",
	),
	//「つまんない」に対し
		"つま(ん|ら)ない(よ|！|!)"=> array(
		"書ぼ〜ん。。。",
		"絵〜、、じゃなかった、字〜",
	),
	//「もずく」に対する返信
	"もずく"=> array(
		"「もずく」？　文字塾みたいなもんですかソレ。。。",
	),
	//「文字塾」に対する返信
	"文字塾"=> array(
		"「もじじゅく」？　もずくみたいなもんですかソレ。。。",
		"もずくmgmg",
	),
	//「ggg」に対する返信
	"ggg"=> array(
		"「ggg」ってなんて読むんですか？",
		"「ggg」行きたい、go go go!",
	),
	//「ddd」に対する返信
	"ddd"=> array(
		"「ddd」ってなんて読むんですか？",
	),
	//「ジージージー」に対し
		"(ジ(ー|イ|ィ)(・)?ジ(ー|イ|ィ)(・)?ジ(ー|イ|ィ)|じ(ー|い|ぃ)(・)?じ(ー|い|ぃ)(・)?じ(ー|い|ぃ))"=> array(
		"なんと！　「字字字」ですか！",
	),
	//「ディーディーディー」に対し
		"(ディ(ー)?(・)?ディ(ー)?(・)?ディ(ー)?|でぃ(ー)?(・)?でぃ(ー)?(・)?でぃ(ー)?)"=> array(
		"教えていただき感謝ディーッす！",
	),
	//「デーデーデー」に対し
		"(デー(・)?デー(・)?デー|でー(・)?でー(・)?でー)"=> array(
		"「デー」でなくて「ディー」ではないディーすか？",
	),
	//「篆書」に対し
		"篆書"=> array(
		"添付書類の略かと思いました",
		"よっしゃ！　テンションあがってキター！",
	),
	//「隷書」に対し
		"隷書"=> array(
		"冷所で保存したほうがいいんですかね",
		"馬鈴薯mgmg",
	),
	//「楷書」に対し
		"楷書"=> array(
		"甲斐性ですか！　そいつぁかいがいしいや！",
		"承知しまいた。その回書は後ほどいたしますね",
		"こんどその楷書とやらをカイショーしてくださいよ。あ、ショーカイって意味です(^^;)",
	),
	//「行書」に対し
		"行書"=> array(
		"ギョ、ウショでしょ！？",
		"驍将が如くたのもしいです！",
		"ギョー！ショーですかー！",
	),
	//「草書」に対し
		"草書"=> array(
		"草書かー。ワタシもそうしょっかなー",
		"やっぱそうっしょ！",
	),
	//「六朝」に対し
		"六朝"=> array(
		"六朝かよ！　ちくしょう！",
	),
	//「ボカッシイ」に対し
		"ボカッシイ"=> array(
		"ボカッシイあわせだなぁ",
		"あれれ～ボカッシィぞ～",
	),
	//「こうぜい」に対する返信
	"こうぜい"=> array(
		"しまっていこうぜい！",
	),
	//「全体ポのコツ」に対し
		"全体ポのコツ"=> array(
		"「全体ポ」のコツ。ときどき同じ色で表示される長文は、文学のあの名作なんですヨ！",
		"「全体ポ」のコツ。新しく作られた文字は会場の壁のいちばん上の列に並んでいきます。いちばん右がいちばん新しい文字です",
		"「全体ポ」のコツ。横に流れてくるのは #字作字演 というハッシュタグのついたツイートです。このツイートも表示されるでしょうか",
		"「全体ポ」のコツ。#字作字演 というハッシュタグをつけたツイートは、漢字もひらがなに変換して表示されるんです",
	),
	//「平たいポのコツ」に対し
		"平たいポのコツ"=> array(
		"「平たいポ」のコツ。ピースの数をいくつで作ろう！とか、自分でルールを作っても面白いですよ",
		"「平たいポ」のコツ。机の上のマス目にそってピッタリと置けば、モニタ上でもきれいな四角形で表示されます",
		"「平たいポ」のコツ。「a」のピースは突き抜けた文字のかたち作るときとか、けっこう使えるんですよ",
		"「平たいポ」のコツ。文字をそっくりそのまま再現しようとしないで、特徴的なところを抑えていくといいかも",
	),
	//「立体ポのコツ」に対し
		"立体ポのコツ"=> array(
		"「立体ポ」のコツ。手に持ってるのを立体と思わずに、モニタだけをみて平面と思うと作りやすいかも",
		"「立体ポ」のコツ。ほんのちょっと角度をかえただけでも相当カタチは変化しますからね、見逃さないで！",
		"「立体ポ」のコツ。大きい立体ポと、小さい立体ポを組み合せるって方法もあるんですよ",
		"「立体ポ」のコツ。「立方体は四角」という印象が強いですが、見る角度によっては六角形にも見えるんですよ",
	),
	//「反対ポのコツ」に対し
		"反対ポのコツ"=> array(
		"「反対ポ」のコツ。赤い玉をみて、どっちに動かそうかなーと考えながら手を動かそう！",
		"「反対ポ」のコツ。ゆっくり動いたところは太く、さっと素早く動いたところは細く書かれます",
		"「反対ポ」のコツ。書く前にいったん空中でペンを動かして、赤い玉の動きを確認するのもいいかも",
	),
	//「合体ポのコツ」に対し
		"合体ポのコツ"=> array(
		"「合体ポ」のコツ。作るときについつい似ている文字を探しがちだけど、よく見ると意外な文字も使えるんです！",
		"「合体ポ」のコツ。間違って置いてしまった文字も、「×」ボタンを押せば消すことができます",
		"「合体ポ」のコツ。「反転」させるボタンもけっこう使えます、試してみてください",
	),
   //「おみくもじ」を含む発言を受け取ると６種類の中からランダムな返答を返すサンプルです
    "おみくもじ"=> array(
        "さんの「おみくもじ」ひきました、「大文字」です！　ラッキーアイテムはキャップっス",
        "さんの「おみくもじ」ひきました、「小文字」です！　ラッキースポーツは「相撲る」ことです",
        "さんの「おみくもじ」ひきました、「横文字」です！　アコーディオン演奏は横文字良造です",
        "さんの「おみくもじ」ひきました、「半角文字」です！　50%OFF!ｼﾝｼｭﾝｾｰﾙﾃﾞﾊﾝｶﾞｸﾀﾞﾖｰ",
        "さんの「おみくもじ」ひきました、「顔文字」です！　お年玉で何かおー＼(^o^)／",
        "さんの「おみくもじ」ひきました、「手書き文字」です！　手がきれいですネー",
        "さんの「おみくもじ」ひきました、「英文字」です！　あわてたりアセンダりしないで！",
        "さんの「おみくもじ」ひきました、「ギャル文字」です！　ﾚヽちﾚﾆち≠〃ｬ儿м○Ｕ〃τ〃￡〓〃Ｕτゐτﾚ￡ﾚヽヵゝヵゞτ〃Ｕょぅ",
        "さんの「おみくもじ」ひきました、「ミノア文字」です！ 実のある話をしましょう",
        "さんの「おみくもじ」ひきました、「楔形文字」です！　ラッキーことわざは、身からでたくさび",
        "さんの「おみくもじ」ひきました、「甲骨文字」です！　文字にうっとりしすぎて恍惚としてしまうかもしれません",
        "さんの「おみくもじ」ひきました、「シュメール文字」です！　あなたを二代目字作字演botに襲名します！",
        "さんの「おみくもじ」ひきました、「西夏文字」です！　やってきたことの成果があらわれるかもしれませんよ",
        "さんの「おみくもじ」ひきました、「制御文字」です！　りっぱな成魚になりましょう",
        "さんの「おみくもじ」ひきました、「突厥文字」です！　吐血するほど無理するな！",
        "さんの「おみくもじ」ひきました、「トンパ文字」です！　トンパチしすぎるな",
        "さんの「おみくもじ」ひきました、「アラム文字」です！　あなたに幸アラムことを",
        "さんの「おみくもじ」ひきました、「ヒエログリフ」です！　ラッキーディナーはヒェンロー鍋です",
        "さんの「おみくもじ」ひきました、「寄席文字」です！　強がりはよせヨ",
        "さんの「おみくもじ」ひきました、「鋳物師」です！　ラッキーフードは芋の煮っころがしです",
        "さんの「おみくもじ」ひきました、「オガム文字」です！　ｼｱﾜｾﾃﾞｱﾘﾏｽﾖｳﾆ（-人-）ﾅﾑｰ",
        "さんの「おみくもじ」ひきました、「契丹文字」です！　あれ、髪きったん？",
        "さんの「おみくもじ」ひきました、「キリル文字」です！　何事もやきりる事が大切です",
        "さんの「おみくもじ」ひきました、「デーヴァナーガリー文字」です！　鼻をかむなら、手鼻ーがーいいです",
        "さんの「おみくもじ」ひきました、「ルーン文字」です！　ルンルンを買っておうちに帰ろう",
        "さんの「おみくもじ」ひきました、「フェニキア文字」です！　ラッキー掛け声は「ふたりはフェニキア！」です",
        "さんの「おみくもじ」ひきました、「しゃもじ」です！　ごはんたくさん食べてくださいね、第五版まで増刷します",
    ),
   //「おみくもじ」を含む発言を受け取ると６種類の中からランダムな返答を返すサンプルです
    "おみくじ"=> array(
        "「おみくじ」じゃなくて「おみくもじ」ですよ。。。",
    ),
	//「文字好き？」に対し
	//"(文字|もじ)(は|が|、)?(大好|好|す)き(ですか)?(\?|？)"=> array(
		"(好|す)き(ですか)?(？|\?)"=> array(
		"もじろんです！！！！",
		"もじろんじゃないですか！",
		"もじろんですってば！",
		"もじろんです！",
		"もじろん好きです！",
		"もじろん大好きです！",
	),
	//「文字好き」に対する返信
//		"(文字|もじ)(は|が|、)?(大|だい)?(好|好|す)き(!|！|です|だ)"=> array(
		"(大|だい)?(好|好|す)き(!|！|です|だ)"=> array(
		"もじろんわたしもです！",
		"わたしもです！",
		"わーい",
		"わいわーい",
	),
	//「新年快樂」に対する返信
	"(新年快樂|ハッピーニューイヤー|謹賀新年|あけましておめでとう)"=> array(
		"あけもじておめでとうございます！",
		"ハッピーＮューイヤー！ #グッドデザイソ",
	),
	 //「FONT」に対する返信
	"FONT"=> array(
		"FONTOU DESUKA!",
		"FONTOU DESUKA! MOJI DESUKA!",
	),
	 //「font」に対する返信
	"font"=> array(
		"fontou desuka!",
		"fontou desuka! moji desuka!",
	),
	//「ありがとう」に対する返信
	"ありがとう"=> array(
		"どういたしま字て",
		"どう異体字まして",
	),
	//「どういたしまして」に対する返信
	"どういたしまして"=> array(
		"ありがとうございます、サンキュー、３Ｑ",
		"どうもあリガチャ",
	),
	 //「タイプルノアール」に対する返信
	"タイプルノアール"=> array(
		"「タイプルノアール」？　なにやら面白そうですねソレ。。。",
		"「タイプルノアール」っていうのがアールノ？",
		"「タイプルノアール」会場って、駅からダイブアルクーノ？",
		"「タイプルノアール」に、ヒーコーキーで行ってもいいですか？",
	),
	//「タイポ」に対する返信
	"タイポ"=> array(
		"タイポしちゃうぞ！",
		"ひえ〜、タイポしないで〜",
	),
	//「タイプ」に対する返信
	"タイプ"=> array(
		"さん、タイプです！（文字という意味）",
		"さん、ダイブしちゃうぞ！",
	),
	//「オフトン」に対する返信
	"(オフトン|おふとん)"=> array(
		"オフトンとOTF似てますね",
	),
	//「ファンタ」に対する返信
	"(ファンタ|ふぁんた)"=> array(
		"ファンタとファン蘭にてますね",
	),
	//「ふぉんとうですか」に対し
		"(フォント|ふぉんと(う)?)ですか(？|\?)"=> array(
		"ふぉんとうです！",
		"モジです！　いや、マジです！",
	),
	 //「ふぉんとうです」に対する返信
	"(フォント|ふぉんと(う)?)です"=> array(
		"ふぉんとだったんだ…",
		"なななんと！　ふぉふぉふぉんと！",
		"ふぉんとってことは、つまりモジですか！",
	),
	//「フォント」に対する返信
	"(フォント|ふぉんと)"=> array(
		"ふぉんとですか！",
		"ふぉんとうにスゴイ！",
		"ふぉんとですか！　モジですか！",
		"那是字体吗！？",
	),
	//「bot」に対する返信
	"bot"=> array(
		"はっ！ボーッとしてましたっ！BOTだけに",
	),
	 //「欧文書体」に対する返信
	"欧文書体"=> array(
		"オーブンちょうだい！",
	),
	 //「好きな書体」に対する返信
	"好きな書体"=> array(
		"好きな書体は何ですか？",
	),
	 //「書体」に対する返信
	"書体"=> array(
		"さん、ふぉんとですか！",
		"さん、書体みたいので、しょーたいしてください",
		"さん、書体の正体って、なんでしょたいね",
		"篆書・隷書・楷書・行書・草書、どれが好きな書体ですか？",
		"ウチのファミリーは大所帯なんですよ",
		"書体、所定のフォルダに入れときました",
		"じつは書体コンプレックスあるみたいなんです、略してショタコンてやつ",
		"書体の詳細な状態を書斎で照査しよう",
		"書体の味ってしょぱいのかな？",
		"わたしは書体、じゃなくて初代、字作字演botです",
		"イッツ、書〜体ム！",
	),
	//「中文もじもじ」に対する返信
	"中文もじもじ"=> array(
		"中文ききたい、もじもーじ",
		"中文きく準備、もうじゅうぶんです！",
		"中文の多い料理店！",
	),
	//「もじもーじ」「もじも〜じ」に対し「もじも〜じ」と返す
		"もじも(ー|〜)じ"=> array(
		"もじも〜じ",
		"もじも〜〜〜じ",
		"はっ！ボーッとしてましたっ！BOTだけに",
		"もじゃも〜じゃ",
	),
	//「もじもじー」「もじもじ〜」に対し「もじもじ〜」と返す
		"もじもじ(ー|〜)"=> array(
		"もじもじ〜",
		"もじゃもじゃ〜",
		"もじもじ〜〜〜",
		"も〜じもじ",
	),
	//「もじもじ」に対し「もじもじ」と返す
		"もじもじ"=> array(
		"もじもじしてますね！",
		"もじもじ。。。",
	),
	 //「もじゃもじゃ」に対する返信
		"もじゃもじゃ"=> array(
		"もじゃもじゃって何ですか？",
		"もじゃも〜じゃ",
	),
	//「文字化け先生」に対する返信
	"文字化け先生"=> array(
		"文字化け先生と聞いて飛んできました",
	),
	//「文字化け」に対する返信
	"文字化け"=> array(
		"文字化けこわい",
		"え、「もじバカ」？",
		"〓〓□□〓〓・〓〓〓〓・・〓〓□□□□〓・・・・〓〓□〓〓〓〓□〓〓",
	),
	//「大文字」に対する返信
	"大文字"=> array(
		"おおもじろいですね！",
	),
	//「大文字」に対する返信
	"小文字"=> array(
		"こもじろいですね！",
	),
	//「文字の食卓」に対する返信
	"(文字の食卓|文字食)"=> array(
		"『文字の食卓』の本が出たんですか？　しゃっしょく買いに行かねば！",
		"わたし実は嘱託なんです。。",
		"『文字の食卓』の中の、どの文字が好きですか？",
		"『文字の食卓』の感想きかせてください",
	),
	//「文字」に対する返信
	"文字"=> array(
		"さん、文字すきですか？",
		"さん、文字はすきですか？",
		"さん、文字は好きですか？",
		"さん、もじ好きですか？",
	),
	 //「大日本代表メンバー」に対する返信
	"大日本代表メンバー"=> array(
		"サプライズ！",
	),
	 //「大日本タイポ組合」に対する返信
	"大日本タイポ"=> array(
		"大日本タイポ組合って何でしたっけ？",
		"大日本タイポ組合って最近どうなんですか",
	),
	 //「新世界タイポ組合」に対する返信
	"新世界タイポ組合"=> array(
		"新世界タイポ組合。。。",
	),
	 //「新世界タイポ研究会」に対する返信
	"新世界タイポ"=> array(
		"新世界タイポ研究会って何ですか？",
		"おっ、新世界タイポ研究会がどこかで観られるとか？",
		"新世界タイポ研究会！　字になります！　いや、気になります！",
		"新世界？　シンセサイザーとは違うんですよね",
		"新世界タイポ組合かとおもいこんでました。。",
		"新世界？　Osakaですか！",
	),
	//「『墨』」に対し
		"『墨』"=> array(
		"『墨』すみずみまで読みます！",
		"『墨』チェック墨です！",
	),
	//「墨」に対し
		"墨"=> array(
		"どうも墨ません…m(_ _)m",
		"墨がたくさんのことを墨田区っていうんですかね？",
	),
	//「天気」に対する返信
	"(きょう|あした|あす|あさって|今日|明日|明後日|本日).*(天気)"=> array(
		"あ、各地の天気予報はちょっとお休みしてます。ごめんなタイポ",
		"[[END]]",
	),
	//「朝ごはん」に対する返信
	"((朝|あさ)(ご)?(飯|はん))"=> array(
		"わたしは「三度の食事」より「写真植字」が好きです！　（キリッ",
		"こんどいっしょに植字にいきましょう！",
		"わたしは「メシ」より「モジ」が好きです！　（キリッ",
		"朝食ですか、超ショック！",
		"朝ごはんに何食べたいですか？　「〇〇食べたい」って聞かせてください",
	),
	//「昼ごはん」に対する返信
	"((昼|ひる)(ご)?(飯|はん))"=> array(
		"わたしは「三度の食事」より「写真植字」が好きです！　（キリッ",
		"こんどいっしょに植字にいきましょう！",
		"わたしは「メシ」より「モジ」が好きです！　（キリッ",
		"昼食ですか、中ショック！",
		"昼ごはんに何食べたいですか？　「〇〇食べたい」って聞かせてください",
	),
	//「晩ごはん」に対する返信
	"((夕|ゆう|晩|ばん|夜|よる)(ご)?(飯|はん))"=> array(
		"わたしは「三度の食事」より「写真植字」が好きです！　（キリッ",
		"こんどいっしょに植字にいきましょう！",
		"わたしは「メシ」より「モジ」が好きです！　（キリッ",
		"夕食ですか、YOU SHOCK!",
		"晩ごはんに何食べたいですか？　「〇〇食べたい」って聞かせてください",
	),
	//「食事」に対する返信
	"食事"=> array(
		"わたしは「食事」より「植字」が好きです！　（キリッ",
	),
	//「おはよ」を含む発言（「おはよ」「おはよう」「おはよー」など）を受け取ると「おはようございます、御主人様」もしくは「Good Morning, Master.」と返すサンプルです
	"おはよ"=> array(
		"Hi, Good MO-JIng!",
		"さん、おはようございます！　きょうも一日もじもじしていきましょう！",
		"さん、おはようございます！　ふぉんとうにいい一日になりますように！",
	),
	"Good MO*JIng"=> array(
		"Hi, Good MO〜〜〜〜〜JIng!",
		"さん、おはようございます！　ふぉんとうにいい一日になりますように！",
	),
	 //「おはよ」を含む発言（「おはよ」「おはよう」「おはよー」など）を受け取ると「おはようございます、御主人様」もしくは「Good Morning, Master.」と返すサンプルです
	"こん(に)?ち(は|わ)"=> array(
		"さん、こんにちは〜",
	),
   //「おやすみ」を含む発言（「おやすみ」「おやすみなさい」「おやすみー」など）を受け取ったとき
	"おやすみ"=> array(
		"さん、おやすみなタイポ",
	),
	//「……」に対し
		"……"=> array(
		"……",
	),
	//「会話終了」を含む発言を受け取るとリプライを返さなくするサンプルです
	"会話終了"=> array(
		"[[END]]",
	),
);
