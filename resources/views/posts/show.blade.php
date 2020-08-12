@extends('layouts.app')

@section('content')
<div class="container min-h">
    <div class="row flex-column-reverse flex-md-row">
        @guest
        <div class="col-md-12">
            <div>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Внимание!</strong> Чтобы оставить свой перевод необходимо <a href="/login" class="text-dark underline"><u>авторизироваться.</u></a>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
            </div>
        </div>
        @endguest
        <div class="col-md-8 bg-white" style="font-size: 16px;">
            <div>
                <img class="w-100 pt-2" src="https://images.wallpaperscraft.com/image/cliff_coast_sea_180785_1440x900.jpg" alt="">
                <p class="text-muted mt-2 mb-2">
                     10.08.2020 г.
                </p>
               <h4 class="font-weight-bold text-dark mb-3">
                   Lorem ipsum dolor sit amet.
               </h4>
               <h6 class="text-muted mb-3">
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, placeat?
               </h6>
               <div class="row text-justify pb-5">
                   <div class="col-md-6">
                    <p>Amy normally hated Monday mornings, but this year was different. Kamal was in her art class and she liked Kamal. She was waiting outside the classroom when her friend Tara arrived.</p>
                    <p>&ldquo;Hi Amy! Your mum sent me a text. You forgot your inhaler. Why don&rsquo;t you turn your phone on?&rdquo; Amy didn&rsquo;t like technology. She never sent text messages and she hated Facebook too.</p>
                    <p>&ldquo;Did Kamal ask you to the disco?&rdquo; Tara was Amy&rsquo;s best friend, and she wanted to know everything that was happening in Amy&rsquo;s life. &ldquo;I don&rsquo;t think he likes me,&rdquo; said Amy. &ldquo;And I never see him alone. He&rsquo;s always with Grant.&rdquo; Amy and Tara didn&rsquo;t like Grant.</p>
                    <p>&ldquo;Do you know about their art project?&rdquo; asked Amy. &ldquo;It&rsquo;s about graffiti, I think,&rdquo; said Tara. &ldquo;They&rsquo;re working on it at the old house behind the factory.&rdquo; &ldquo;But that building is dangerous,&rdquo; said Amy. &ldquo;Aah, are you worried he&rsquo;s going to get hurt?" Tara teased. &ldquo;Shut up, Tara! Hey look, here they come!&rdquo;</p>
                    <p>Kamal and Grant arrived. &ldquo;Hi Kamal!&rdquo; said Tara. &ldquo;Are you going to the Halloween disco tomorrow?&rdquo; &ldquo;Yes. Hi Amy,&rdquo; Kamal said, smiling. &ldquo;Do you want to come and see our paintings after school?&rdquo; &ldquo;I&rsquo;m coming too!&rdquo; Tara insisted.</p>
                    <p>After school, Kamal took the girls to the old house. It was very old and very dirty too. There was rubbish everywhere. The windows were broken and the walls were damp. It was scary. Amy didn&rsquo;t like it. There were paintings of zombies and skeletons on the walls. &ldquo;We&rsquo;re going to take photos for the school art competition,&rdquo; said Kamal. Amy didn&rsquo;t like it but she didn&rsquo;t say anything. &ldquo;Where&rsquo;s Grant?&rdquo; asked Tara. &ldquo;Er, he&rsquo;s buying more paint.&rdquo; Kamal looked away quickly. Tara thought he looked suspicious. &ldquo;It&rsquo;s getting dark, can we go now?&rdquo; said Amy. She didn&rsquo;t like zombies.</p>
                    <p>Then, they heard a loud noise coming from a cupboard in the corner of the room. &ldquo;What&rsquo;s that?&rdquo; Amy was frightened. &ldquo;I didn&rsquo;t hear anything,&rdquo; said Kamal. Something was making strange noises. There was something inside the cupboard. &ldquo;Oh no! What is it?&rdquo; Amy was very frightened now. &ldquo;What do you mean? There&rsquo;s nothing there!&rdquo; Kamal was trying not to smile. Suddenly the door opened with a bang and a zombie appeared, shouting and moving its arms. Amy screamed and covered her eyes. &ldquo;Oh very funny, Grant!&rdquo; said Tara looking bored. Kamal and Grant started laughing. &ldquo;Ha ha, you were frightened!&rdquo; said Grant. "Do you like my zombie costume?&rdquo; Amy took Tara&rsquo;s arm. &ldquo;I can&rsquo;t breathe,&rdquo; she said. Kamal looked worried now. &ldquo;Is she OK? It was only a joke.&rdquo; &ldquo;No she&rsquo;s not OK, you idiot. She&rsquo;s having an asthma attack and she forgot her inhaler.&rdquo; Tara took out her phone. &ldquo;I&rsquo;m calling her dad.&rdquo;</p>
                    <p>Next evening was Halloween. The girls were at the school disco. &ldquo;Are you better now?&rdquo; asked Tara. &ldquo;I&rsquo;m fine,&rdquo; said Amy. &ldquo;I think it was the smell of paint that started the attack.&rdquo; Tara looked around. &ldquo;So, where are the&nbsp;<em>zombies</em>?&rdquo; &ldquo;I don&rsquo;t know, I don&rsquo;t want to see Kamal again,&rdquo; said Amy. &ldquo;Come on, let&rsquo;s dance!&rdquo;</p>
                    <p>Amy and Tara were dancing when Grant arrived, looking worried. &ldquo;Hi, someone stole my phone. Have you seen Kamal? He said he was coming here at eight o&rsquo;clock. Can you phone him?&rdquo; &ldquo;Go away, idiot!&rdquo; Tara didn&rsquo;t stop dancing. Grant looked upset. &ldquo;Tell him I&rsquo;m looking for him,&rdquo; he called as he left the disco. Tara&nbsp;<em>really</em>&nbsp;didn&rsquo;t like Grant.</p>
                    <p>Just then, Tara&rsquo;s phone rang. She looked at it. &ldquo;Ha!&rdquo; she said, &ldquo;I don&rsquo;t believe it!&rdquo; &ldquo;What is it?&rdquo; asked Amy. &ldquo;Kamal just sent a text to everyone. Listen!&rdquo; Tara read out Kamal&rsquo;s message.</p>
                    <p><em>&ldquo;I&rsquo;m at the house. I can&rsquo;t move. Please call an ambulance. My battery is running out.&rdquo;</em></p>
                    <p>The girls didn&rsquo;t stop dancing. Lots of their friends saw Kamal&rsquo;s message too, but Tara told everyone it was just a joke. They all ignored it.</p>
                    <p>The next morning, Amy&rsquo;s mum and dad were listening to the radio. &ldquo;Is Amy up yet?&rdquo; Dad asked. &ldquo;No, she&rsquo;s tired,&rdquo; said mum, turning the volume up on the radio.</p>
                    <p><em>&ldquo;This morning, police are investigating the death of a sixteen-year-old boy. He died last night in a disused house on Moortown Road...&rdquo;</em></p>
                    <p>Dad put down his newspaper. &ldquo;But that&rsquo;s where Amy went with her friends.&rdquo;</p>
                    <p><em>&ldquo;...They found the body early this morning. His name was Kamal Naseer...&rdquo;</em></p>
                    <p><em>Brendan Dunne</em></p>
                   </div>
                   <div class="col-md-6">
                        <!-- #######  YAY, I AM THE SOURCE EDITOR! #########-->
<p>Обычно Эми ненавидела утро понедельника, но в этом году все было иначе.&nbsp;Камаль был в ее художественном классе, и ей нравился Камаль.&nbsp;Она ждала возле класса, когда пришла ее подруга Тара.</p>
<p>&laquo;Привет, Эми!&nbsp;Твоя мама прислала мне сообщение.&nbsp;Вы забыли ингалятор.&nbsp;Почему бы тебе не включить телефон? &raquo;&nbsp;Эми не любила технологии.&nbsp;Она никогда не отправляла текстовых сообщений и ненавидела Facebook.</p>
<p>&laquo;Камаль пригласил вас на дискотеку?&raquo;&nbsp;Тара была лучшей подругой Эми, и она хотела знать все, что происходило в жизни Эми.&nbsp;&laquo;Не думаю, что я ему нравлюсь, - сказала Эми.&nbsp;&laquo;И я никогда не вижу его одного.&nbsp;Он всегда с Грантом &raquo;.&nbsp;Эми и Тара не любили Гранта.</p>
<p>&laquo;Вы знаете об их арт-проекте?&raquo;&nbsp;спросила Эми.&nbsp;&laquo;Думаю, дело в граффити, - сказала Тара.&nbsp;&laquo;Они работают над этим в старом доме за фабрикой&raquo;.&nbsp;&laquo;Но это здание опасно, - сказала Эми.&nbsp;&laquo;Аа, ты боишься, что он получит травму?&raquo; - поддразнила Тара. &laquo;Заткнись, Тара! Эй, смотри, вот они!&raquo;</p>
<p>Прибыли Камаль и Грант.&nbsp;&laquo;Привет, Камаль!&raquo;&nbsp;- сказала Тара.&nbsp;&laquo;Ты собираешься завтра на дискотеку в честь Хэллоуина?&raquo;&nbsp;"Да.&nbsp;Привет, Эми, - улыбнулся Камаль.&nbsp;&laquo;Хочешь пойти посмотреть наши картины после школы?&raquo;&nbsp;&laquo;Я тоже иду!&raquo;&nbsp;- настаивала Тара.</p>
<p>После школы Камаль отвел девочек в старый дом.&nbsp;Он был очень старым и очень грязным.&nbsp;Везде был мусор.&nbsp;Окна были разбиты, стены были влажными.&nbsp;Это было страшно.&nbsp;Эми это не понравилось.&nbsp;На стенах висели изображения зомби и скелетов.&nbsp;&laquo;Мы собираемся сделать фотографии для школьного художественного конкурса&raquo;, - сказал Камаль.&nbsp;Эми это не понравилось, но она ничего не сказала.&nbsp;"Где Грант?"&nbsp;спросила Тара.&nbsp;&laquo;Эээ, он покупает еще краски&raquo;.&nbsp;Камаль быстро отвел взгляд.&nbsp;Тара думала, что он выглядел подозрительно.&nbsp;&laquo;Темнеет, мы можем идти?&raquo;&nbsp;сказала Эми.&nbsp;Она не любила зомби.</p>
<p>Затем они услышали громкий шум из шкафа в углу комнаты.&nbsp;"Что это такое?"&nbsp;Эми была напугана.&nbsp;&laquo;Я ничего не слышал, - сказал Камаль.&nbsp;Что-то издавало странные звуки.&nbsp;Внутри шкафа что-то было.&nbsp;"О нет!&nbsp;Что это?"&nbsp;Теперь Эми была очень напугана.&nbsp;"Что вы имеете в виду?&nbsp;Там ничего нет!"&nbsp;Камаль старался не улыбаться.&nbsp;Внезапно дверь с грохотом открылась, и появился зомби, крича и шевеля руками.&nbsp;Эми закричала и закрыла глаза.&nbsp;&laquo;Ой, очень смешно, Грант!&raquo;&nbsp;- скучающе сказала Тара.&nbsp;Камаль и Грант начали смеяться.&nbsp;&laquo;Ха-ха, ты испугался!&raquo;&nbsp;- сказал Грант.&nbsp;"Тебе нравится мой костюм зомби?"&nbsp;Эми взяла Тару за руку. "Я не могу дышать", - сказала она. Камаль выглядел обеспокоенным. "Она в порядке? Это была всего лишь шутка".&nbsp;"Нет, с ней не все в порядке, идиот. У нее приступ астмы, и она забыла свой ингалятор."&nbsp;Тара достала телефон.&nbsp;&laquo;Я звоню ее отцом&raquo;.</p>
<p>Следующим вечером был Хэллоуин.&nbsp;Девочки были на школьной дискотеке.&nbsp;"Тебе лучше сейчас?"&nbsp;спросила Тара.&nbsp;&laquo;Я в порядке&raquo;, - сказала Эми.&nbsp;&laquo;Я думаю, что нападение было начато из-за запаха краски&raquo;.&nbsp;Тара огляделась.&nbsp;&laquo;Так где же&nbsp;<em>зомби</em>&nbsp;?&raquo;&nbsp;&laquo;Я не знаю, я не хочу снова видеть Камаля&raquo;, - сказала Эми.&nbsp;&laquo;Давай, давай танцевать!&raquo;</p>
<p>Эми и Тара танцевали, когда Грант прибыл, выглядя обеспокоенными.&nbsp;&laquo;Привет, кто-то украл мой телефон.&nbsp;Вы видели Камаля?&nbsp;Он сказал, что приедет сюда в восемь часов.&nbsp;Вы можете ему позвонить?&nbsp;&laquo;Уходи, идиот!&raquo;&nbsp;Тара не прекращала танцевать.&nbsp;Грант выглядел расстроенным.&nbsp;&laquo;Скажи ему, что я ищу его&raquo;, - крикнул он, уходя с дискотеки.&nbsp;Тара&nbsp;<em>действительно</em>&nbsp;не любила Гранта.</p>
<p>В этот момент зазвонил телефон Тары.&nbsp;Она посмотрела на это.&nbsp;&laquo;Ха!&raquo;&nbsp;она сказала: "Я не верю!"&nbsp;"Что это?"&nbsp;спросила Эми.&nbsp;&laquo;Камаль только что отправил всем сообщение.&nbsp;Слушать!"&nbsp;Тара зачитала сообщение Камала.</p>
<p><em>&laquo;Я в доме.&nbsp;Я не могу пошевелиться.&nbsp;Пожалуйста, вызовите скорую.&nbsp;Моя батарея разряжена &raquo;.</em></p>
<p>Девушки не прекращали танцевать.&nbsp;Многие их друзья тоже видели сообщение Камаля, но Тара сказала всем, что это просто шутка.&nbsp;Все они это проигнорировали.</p>
<p>На следующее утро мама и папа Эми слушали радио.&nbsp;&laquo;Эми еще не встала?&raquo;&nbsp;- спросил папа.&nbsp;&laquo;Нет, она устала&raquo;, - сказала мама, прибавив громкость в радио.</p>
<p><em>&laquo;Сегодня утром полиция расследует смерть шестнадцатилетнего мальчика.&nbsp;Он умер вчера вечером в заброшенном доме на Муртаун-роуд ...</em></p>
<p>Папа отложил газету.&nbsp;&laquo;Но вот куда Эми пошла со своими друзьями&raquo;.</p>
<p><em>&laquo;... Они нашли тело рано утром.&nbsp;Его звали Камаль Насир ... "</em></p>
<p><em>Брендан Данн</em></p>
                   </div>
               </div>
            </div>
            <p class="float-right">
                <i class="fa fa-eye" style="font-size: 16px;"></i>
                <span>12</span>
                <i class="fa fa-comments pl-2"></i>
                <span>15</span>
            </p>
        </div>
        <div class="col-md-4 mb-3">
            <div class="sticky-top" style="top: 10px;">
                <form class="form-group mb-2 d-flex flex-column" enctype="multipart/form-data" method="POST" action="/search">
                    @csrf
                    <input class="form-control mr-sm-2 col-md-12 mb-2" name="search" style="height: 40px;" type="search" placeholder="Что ищем?" aria-label="Search">
                    <button class="btn btn-outline-info" type="submit">Поиск</button>
                </form>
                    <h4 class="text-center text-underline p-1">
                        Недавние переводы
                    </h4>
                    <div class="card shadow-sm">
                        <img src="https://static.scientificamerican.com/sciam/cache/file/4E0744CD-793A-4EF8-B550B54F7F2C4406.jpg" alt="" src="" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text text-muted mb-1">
                                10.08.2020 г.
                            </p>
                            <h5 class="card-title font-weight-bold">
                                Мать некита увезли на носилках
                            </h5>
                            <h6 class="card-subtitle text-muted mb-1">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem tempora fugiat beatae debitis corporis dignissimos! Beatae eum illo veritatis suscipit accusamus voluptatibus nemo eaque consequatur laudantium temporibus? Officia, vel ut?
                            </h6>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, enim.
                            </p>
                            <a class="btn btn-primary float-right" href="#">Подробнее...</a>   
                            <p class="card-text pt-2">
                                <i class="fa fa-eye" style="font-size: 16px;"></i>
                                <span>12</span>
                                <i class="fa fa-comments pl-2"></i>
                                <span>15</span>
                            </p>                       
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

