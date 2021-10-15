<div>
    <div class="block block-rounded block-themed">
        <div class="block-header bg-default">
            <h3 class="block-title">Форма Запольнение</h3>
        </div>
        <form wire:submit="store">
            <div class="block-content">
                <div class="col-lg-12 col-xl-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="my-3">
                                    <label for="exampleFormControlSelect1" style="font-size: 12px;"> Тип клиента</label>

                                    <select class="form-control" wire:model="client.type">
                                        @foreach ($ClientType as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    <label> Код клиента</label>
                                    <input type="numeric" class="form-control" wire:model.defer="client.code"
                                        value="{{ $client->code }}" readonly>
                                    <label> Дата заявление</label>
                                    <input type="date" class="form-control" wire:model.defer='client.add_date' required="" >
                                </div>
                                <div class="my-3">
                                    <label> Место работы</label>
                                    <input class="form-control" wire:model="client.workaddress" required=""
                                        aria-invalid="true">
                                    <label> ИНН
                                        @error('client.inn')
                                        <span class="badge badge-danger">{{ $message }}</span>
                                        @enderror
                                    </label>
                                    <input type="number" class="form-control" min="100000000" max="999999999" wire:model="client.inn" >
                                    <label> Пенсионный счет</label>
                                    <input name="basic" class="form-control" wire:model="client.pen_chet" required=""
                                        aria-invalid="true">
                                </div>
                                <div class="my-3">
                                    <h6>Контактные данные</h6>
                                    <label> Телефон</label>
                                    <input class="form-control phone" type="tel" wire:model="client.phone" required=""
                                        aria-invalid="true" placeholder="">
                                    <label> E-mail </label>
                                    <input class="form-control" type="email" wire:model="client.email" required=""
                                        aria-invalid="true">

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="my-3">
                                <label for="exampleFormControlSelect1"> Пол</label>
                                <select class="form-control" wire:model="client.sex">
                                    <option value="1" selected="">Мужской</option>
                                    <option value="0">Женский</option>
                                </select>
                                <label> Фамилия</label>
                                <input type="text" class="form-control" wire:model="client.sname" required=""
                                    aria-invalid="true">
                                <label> Имя</label>
                                <input type="text" class="form-control" wire:model="client.name" required=""
                                    aria-invalid="true">
                                <label> Отчество</label>
                                <input type="text" class="form-control" wire:model="client.fname" required=""
                                    aria-invalid="true">
                                <label> Дата рождения</label>
                                <input type="date" class="form-control" wire:model="client.bdate" required=""
                                    aria-invalid="true">
                                <label> Код области</label>
                                <select name="" id="" class="form-control" required="" wire:model="client.province"
                                    aria-invalid="true">
                                    <option selected="">Выбирите</option>
                                    <option value="1">Қорақалпоғистон Республикаси</option>
                                    <option value="2">Андижон вилояти</option>
                                    <option value="3">Бухоро вилояти</option>
                                    <option value="4">Жиззах вилояти</option>
                                    <option value="5">Қашқадарё вилояти</option>
                                    <option value="6">Навоий вилояти</option>
                                    <option value="7">Наманган вилояти</option>
                                    <option value="8">Самарқанд вилояти</option>
                                    <option value="9">Сирдарё вилояти</option>
                                    <option value="10">Сурхондарё вилояти</option>
                                    <option value="11">Тошкент вилояти</option>
                                    <option value="12">Фарғона вилояти</option>
                                    <option value="13">Хоразм вилояти</option>
                                    <option value="14">Тошкент шаҳри</option>
                                </select>
                                <label> Код района</label>
                                <select name="" id="" class="form-control" required="" wire:model="client.region"
                                    aria-invalid="true">
                                    <option selected="">Выбирите</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="my-3">
                                <div class="example-1">
                                    <div class="form-group">
                                        <label class="label">
                                            <i class="mr-3 icon-attachment icon-2x"></i>
                                            <span class="title">Добавить файл</span>
                                            <input type="file" accept=".jpg, .jpeg, .png" wire:model="image">
                                        </label>
                                    </div>
                                </div>
                                <label> Серия</label>
                                <div class="d-flex">
                                    <input class="mr-1 form-control form-w" type="text" name="basic"
                                        wire:model="client.seria1" required="" aria-invalid="true">
                                    <input name="basic" class="form-control" required="" wire:model="client.seria2"
                                        aria-invalid="true" wire:keypress="seria()">
                                    <input type="hidden" wire:model="client.seria" value="">
                                </div>
                                <label> ПИНФЛ</label>
                                <input type="numeric" name="pinn" class="form-control" wire:model="client.pinn"
                                    required="" aria-invalid="true">
                                <label> Дата получения</label>
                                <input type="date" name="pass_adate" class="form-control" wire:model="client.pass_adate"
                                    required="" aria-invalid="true">
                                <label> Действителен до</label>
                                <input type="date" name="pass_edate" class="form-control" wire:model="client.pass_edate"
                                    required="" aria-invalid="true">
                                <label> Кем выдан</label>
                                <input name="basic" class="form-control" wire:model="client.pass_where" required=""
                                    aria-invalid="true">
                                <label> Адрес</label>
                                <input name="basic" class="form-control" required="" wire:model="client.address"
                                    aria-invalid="true">

                            </div>
                        </div>
                        <div class="mx-auto col-lg-10">
                            <div class="row justify-content-center">
                                <div class="col-lg-3">
                                    <label>Код KATM-SIR</label>
                                    <input class="form-control" type="text" name="basic" required="" aria-invalid="true"
                                        style="width: 200px;">
                                </div>
                                <div class="col-lg-3">
                                    <label>Уникальный Код</label>
                                    <input class="form-control" type="text" name="basic" required="" aria-invalid="true"
                                        style="width: 200px;">
                                </div>
                                <div class="col-lg-3">
                                    <button type="button p-0" class="btn">АСОКИ</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-10">
                                    <div class="d-flex justify-content-center align-items-end">
                                        <div class="button">
                                            <button type="button" id="reset" class="text-white btn btn-danger"
                                                data-toggle="modal" data-target="#CancelModal"
                                                data-whatever="@mdo">Отказать</button>
                                        </div>
                                        <textarea class="mx-auto form-control w-50" cols="10" wire:model="client.remark"
                                            rows="5"></textarea>
                                        <div class="button">
                                            <button type="submit" class="btn btn-success">Разрешить</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </form>

    </div>
</div>
</div>
