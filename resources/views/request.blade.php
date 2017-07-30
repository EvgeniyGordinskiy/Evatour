
<table style="    max-width: 100%;
    width: 908px;">
    <tr style="background-color: white; height: 100px;    text-align: center;">
        <td><h2>Турагентство "Ева"</h2></td>
    </tr>
    <tr>
        <td class="col-md-2" style="padding-right: 16px;    padding-left: 16px;">
            <img   src='{{$message->embed(public_path()."/img/business card.jpg")}}'
                   style="width: 111px;
                       border-radius: 50%;
                           position: relative;
                            left: 43%;
                            "
            />

        </td>
    </tr>
    <tr>
    <td>
        {{$text}}
    </td>
    </tr>
    <tr>

    <td><h3>Клиент</h3></td>
    </tr>
    <tr>

    <td>Иия: {{$client->name}}</td>
    </tr>
    <tr>

    <td>Телофон: {{$client->phone}}</td>
    </tr>
    <tr>

    <td>Email: {{$client->email}}</td>
    </tr>
    @if(isset($comment))
        <tr>

        <td>Комментарий: {{$comment}}</td>
        </tr>
     @endif
</table>
<p>
</p>

<p style="text-align: center;">
    <a href="
            http://hostenko/eva-tour
            ">
        <button  style="
        margin-top: 14px;
        width: 201px;
        height: 30px;
        border-radius: 5px;
        background-color: #0883f7;
        border-color: #0883f7;
        font-size: 17px;
        color: white;
        font-weight: bold;
    ">
         Перейти на сайт
        </button>
    </a>
</p>
<p>
    От турагентства "Ева"
</p>