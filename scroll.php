<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Independent CSS scrolling panels (with inertia)</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
				<style>
						/*This just stops me getting horizontal scrolling if anything overflows the width*/
						html, body {
								/*overflow-x: hidden;*/
								overflow: hidden;
								position: fixed;
								margin: 0px;
								padding: 0px;
						}

						/*This is our main wrapping element, it's made 100vh high to ensure it is always the correct size and then moved into place and padded with negative margin and padding*/
						.Container {
								display: flex;
								overflow: hidden;
								height: 100vh;
								position: relative;
								width: 100%;
								backface-visibility: hidden;
								will-change: overflow;
						}
						/*All the scrollable sections should overflow and be whatever height they need to be. As they are flex-items (due to being inside a flex container) they could be made to stretch full height at all times if needed.
						WebKit inertia scrolling is being added here for any present/future devices that are able to make use of it.
						*/
						.Left,
						.Middle,
						.Right {
								overflow: auto;
								height: auto;
								-webkit-overflow-scrolling: touch;
								-ms-overflow-style: none;
						}
						/*Entirely optional – just wanted to remove the scrollbar on WebKit browsers as I find them ugly*/
						.Left::-webkit-scrollbar,
						.Middle::-webkit-scrollbar,
						.Right::-webkit-scrollbar {
								display: none;
						}
						/*  Left and Right are set sizes while the Middle is set to flex one so it occupies all remaining space. This could be set as a width too if prefereable, perhaps using calc.*/
						.Left {
								width: 12.5rem;
								background-color: indigo;
						}

						.Middle {
								/*flex: 1;*/
						}

						.Right {
								width: 12.5rem;
								background-color: violet;
						}
				</style>
    </head>
    <body>

    <div class="Container">
        <div class="Left">

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam elementum, ex nec hendrerit suscipit, odio leo consequat ligula, et sollicitudin magna eros sit amet ligula. Nam elit erat, interdum nec enim id, posuere sodales erat. Nunc volutpat dignissim elit vel hendrerit. Duis egestas turpis et arcu congue porta. Morbi mattis tortor non eros euismod vulputate. Ut venenatis lorem magna, a sagittis ante volutpat non. Nunc vel orci eget augue feugiat vestibulum in ac nisi.

Integer eget lorem nisi. Suspendisse tempus odio nisl, eget euismod orci vulputate et. Nunc nec neque dui. Mauris non commodo libero, id lobortis nisl. Donec venenatis et velit nec laoreet. Etiam tincidunt erat neque, eget condimentum dui elementum in. Integer a posuere ligula.

Cras egestas rutrum nunc quis laoreet. Phasellus finibus hendrerit dolor, vel eleifend dolor eleifend non. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam nec sagittis massa, vitae ornare metus. Praesent auctor aliquet molestie. Ut pulvinar magna libero, a fermentum lectus sagittis non. Sed lacinia at ante vitae accumsan. Mauris vestibulum lorem magna, id vestibulum massa finibus in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec accumsan diam. Vestibulum dapibus dolor egestas, gravida ante eget, scelerisque ex. Praesent eget elit eget leo pharetra dignissim. Etiam hendrerit, lectus nec sagittis aliquet, massa tellus malesuada mi, eu hendrerit velit erat non elit.

Vivamus eu quam consectetur, maximus justo egestas, suscipit magna. Nunc accumsan est id ante gravida, eget varius eros porttitor. Nam sit amet erat at metus ultricies vehicula. Proin aliquet pretium purus, non sodales sapien condimentum eget. Mauris id bibendum tortor. Vestibulum quis nibh luctus est imperdiet vestibulum. Nulla imperdiet diam ut nisl tempor, bibendum congue quam accumsan. Duis lacinia placerat elit nec semper. Ut placerat risus ut nibh tincidunt pellentesque. Donec egestas convallis enim eu rhoncus. Suspendisse quis finibus lorem, in gravida ante. Phasellus varius neque et justo bibendum fermentum. Ut tincidunt quis mauris ac rhoncus. Nullam congue, risus in rhoncus auctor, quam enim vestibulum eros, a interdum velit orci pretium est. Sed non leo mattis, sagittis ligula et, dictum felis. Morbi felis felis, suscipit non vulputate eget, egestas eu nunc.

Proin semper nibh vitae odio vehicula consectetur. Nulla ornare malesuada nisi non fringilla. Proin elementum, nulla sit amet imperdiet varius, neque sapien iaculis lectus, vel consectetur ante ligula sed elit. Fusce ullamcorper sem eros, tristique laoreet turpis eleifend non. Aliquam volutpat nulla et quam luctus malesuada. Nulla facilisi. Integer ultrices placerat accumsan. Vestibulum congue tristique efficitur. Aliquam accumsan est vel congue auctor. Donec vel efficitur ex. Suspendisse luctus efficitur tortor, vitae porttitor urna imperdiet in. Nunc dignissim laoreet arcu euismod scelerisque. Morbi neque nisi, efficitur non ipsum a, venenatis posuere urna. Vivamus congue imperdiet lacinia. Donec id diam tincidunt, elementum elit nec, porttitor sapien. </div>

        <div class="Middle">

Nullam dolor metus, consectetur sed mi nec, varius placerat leo. Duis imperdiet lacus a posuere commodo. Duis rutrum mi posuere, malesuada diam et, pulvinar turpis. In lobortis mauris sit amet turpis feugiat malesuada. Nulla et suscipit justo. Maecenas sit amet justo consectetur, consectetur lectus eu, imperdiet lectus. Nam consectetur nisl non accumsan egestas. Quisque ornare sodales ornare. Etiam convallis non leo commodo porta. Proin dictum risus ut mauris lacinia consequat. Praesent ut urna ultricies, elementum dui id, fermentum elit. Vestibulum accumsan feugiat tortor, a porta libero pulvinar id. Morbi dolor sapien, imperdiet a malesuada in, interdum vel nibh.

Mauris a nunc malesuada, venenatis enim ac, hendrerit lacus. Pellentesque rutrum porta pharetra. Nunc sit amet leo nec nisl tristique dictum. Sed auctor laoreet elit quis consectetur. Aliquam dictum ac nibh vitae convallis. Suspendisse sed elit blandit, convallis massa a, tempor nisl. Proin blandit purus eget dolor ultrices, ut hendrerit erat ornare.

Mauris facilisis, dolor commodo sagittis tempus, nisl ligula imperdiet massa, quis commodo turpis turpis quis eros. Ut egestas maximus diam id pellentesque. Quisque a sem dapibus, cursus ante vel, tincidunt lacus. Sed mattis placerat metus, sit amet facilisis elit. Aliquam vulputate diam eu libero elementum lacinia. Aenean eget interdum lectus. Integer massa augue, ultrices ut tortor quis, dictum tincidunt neque.

Cras suscipit arcu sed est facilisis, non tincidunt dolor efficitur. Aenean tincidunt sem nec ligula volutpat euismod. Cras eget risus turpis. Morbi volutpat felis tellus, id venenatis nulla accumsan eget. Nulla euismod nunc in justo sagittis tempor. In efficitur efficitur rhoncus. Curabitur sit amet mattis elit. Aenean ultrices libero sed dolor laoreet commodo. Quisque ac vehicula arcu, nec pellentesque nulla. Aenean fringilla, urna sit amet malesuada iaculis, sapien enim ullamcorper urna, dignissim rhoncus turpis nisl id turpis.

Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla auctor at ante quis mattis. Sed dapibus ex id nisl hendrerit auctor. Integer sed purus quis lacus ullamcorper porta. Suspendisse ornare elementum neque, sed elementum leo. Morbi porttitor lectus in egestas feugiat. Sed ex tellus, luctus in odio ac, bibendum fermentum urna. Sed fermentum feugiat egestas. Nullam in condimentum purus. Integer ac laoreet augue. Vivamus at egestas ligula, quis finibus odio. Aliquam lectus ipsum, mattis vel lacus vel, iaculis gravida dui. Praesent ultricies nulla nunc. </div>

        <div class="Right">

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc imperdiet ac turpis id vehicula. Sed vestibulum ligula nisi, sed cursus sem venenatis quis. Nunc justo quam, consectetur fermentum tempor sed, tincidunt at tortor. Ut malesuada, augue ut placerat consequat, nunc nisi cursus magna, sit amet commodo ex velit eu arcu. Suspendisse convallis in nisi sit amet maximus. Integer blandit, nulla sit amet suscipit porttitor, arcu neque interdum nunc, a iaculis massa mauris ornare felis. Nunc hendrerit felis enim, et ullamcorper magna volutpat non. Vestibulum ullamcorper libero sit amet ex semper bibendum. Etiam maximus ac arcu sed bibendum. Donec rutrum semper enim, id ultrices ipsum varius eget. Ut porta cursus nunc, in molestie nibh ultrices sed. Donec tincidunt aliquet aliquet. Nullam tempus, mi sit amet convallis faucibus, urna dolor pellentesque lorem, a auctor turpis orci sed sapien.

Praesent vehicula nulla enim, a rhoncus nunc consectetur eu. Nulla eget viverra magna, sed pharetra quam. Cras et nunc a lorem molestie sodales vel ut velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent elit justo, fermentum eu erat mattis, dictum hendrerit eros. Nam dignissim mi feugiat, tristique est id, lacinia purus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc vel orci nisl.

Ut venenatis diam ut fringilla gravida. Proin auctor id ipsum ut tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer eros purus, tincidunt vitae molestie non, molestie quis nibh. Suspendisse vestibulum venenatis luctus. Pellentesque id dictum sem, et feugiat libero. Nunc vitae ultrices ipsum. Sed tempor ut lacus pulvinar efficitur. Phasellus vel bibendum lorem, et aliquam velit. Phasellus ut molestie felis. Praesent dignissim mi eget nulla tempus, et ornare massa finibus. Pellentesque interdum eros efficitur purus pulvinar dignissim. Aenean ultricies purus arcu, a dictum lacus consequat at.

Suspendisse quis ultricies magna. Maecenas felis lectus, convallis et tincidunt quis, tempus quis tortor. Cras ut bibendum mi. Curabitur id commodo eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam rutrum tristique felis nec accumsan. Vestibulum elit est, interdum sit amet quam quis, hendrerit sagittis urna. Duis sed leo facilisis, dapibus eros ut, rutrum neque. Etiam molestie libero non felis vestibulum aliquet.

Maecenas lobortis massa a sapien auctor, a maximus erat vulputate. Mauris a volutpat quam. Nullam risus lacus, consequat et neque at, laoreet mattis diam. Nulla in laoreet orci. Mauris et nunc ut diam fringilla malesuada eget vel risus. Nunc id tincidunt libero. Nam imperdiet ligula mauris. Donec rhoncus mauris ex, sit amet pellentesque arcu dignissim at. Pellentesque auctor ante quis rutrum feugiat. Morbi massa augue, lobortis ut ante in, vestibulum ultricies augue. </div>

    </div>

    </body>


		<script>
			var vpH = window.innerHeight;
			document.documentElement.style.height = vpH.toString() + "px";
			document.getElementsByTagName("body")[0].style.height = vpH.toString() + "px";
		</script>

		<script>
			$(function() {
					fullWidth = $(document).width();
					//alert(fullWidth)
					$(".Left,.Middle,.Right").css({
						width: fullWidth
					})
			});
		</script>


</html>
