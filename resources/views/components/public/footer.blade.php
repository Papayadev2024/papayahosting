<footer class="bg-[#082252]">
    <div
      class="grid grid-cols-1 md:grid-cols-2 w-11/12 mx-auto py-10 gap-10 md:gap-5"
    >
      <div class="w-full md:max-w-[500px] flex flex-col gap-5" data-aos="fade-up"
      data-aos-offset="150">
        <a href="{{route('index')}}">
          <img src="{{asset('images/svg/image_1.svg')}}" alt="HPI" />
        </a>
        <p class="text-white font-roboto font-normal text-text16">
            Únase a nuestro boletín para mantenerse actualizado sobre funciones y lanzamientos.
        </p>

        <div class="flex flex-col gap-2" data-aos="fade-up"
        data-aos-offset="150">
          <form
            id="footerFormulario"
            class="flex flex-col md:flex-row md:justify-start md:items-center gap-5"
          >
          @csrf
            <div class="w-full">
              <input required name="email" id="emailFooter" placeholder="Dejanos tu email"
                type="email"
                class="bg-white px-5 py-3 rounded-xl w-full"
              />
              <input type="hidden" id="nameFooter" required name="full_name" value="Usuario suscrito" />
              <input type="hidden" id="tipo" placeholder="tipo" name="tipo_message" value="Inscripción" />
            </div>

            <div class="flex justify-center items-center w-full md:w-auto">
              <button
                type="submit"
                class="font-roboto font-semibold text-text16 text-white border border-white py-3 px-6 rounded-xl w-full md:w-auto text-center"
                >Suscribe
              </button>
            </div>
          </form>
          <p class="font-roboto font-normal text-text12 text-white">
            Al suscribirse, acepta nuestra Política de privacidad y brinda su consentimiento para recibir actualizaciones de nuestra empresa.
          </p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-0">
        <div class="flex flex-col gap-5"  data-aos="fade-up"
        data-aos-offset="150">
          <p class="font-roboto font-semibold text-text16 text-white">Síganos</p>

          <div class="flex flex-col gap-5">
            @if($general[0]->facebook)
            <a
              href="{{$general[0]->facebook}}"
              target="_blank"
              class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14"
            >
              <img src="{{asset('images/svg/image_2.svg')}}" alt="facebook" />
              <span>Facebook</span>
            </a>
            @endif
            @if ($general[0]->instagram)
            <a
              href="{{$general[0]->instagram}}"
              target="_blank"
              class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14"
            >
              <img src="{{asset('images/svg/image_3.svg')}}" alt="instagram" />
              <span>Instagram</span>
            </a>
            @endif
            @if ($general[0]->twitter)
            <a
              href="{{$general[0]->twitter}}"
              target="_blank"
              class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14"
            >
              <img src="{{asset('images/svg/image_4.svg')}}" alt="twitter" />
              <span>Twitter</span>
            </a>
            @endif
            @if ($general[0]->linkedin)
            <a
              href="{{$general[0]->linkedin}}"
              target="_blank"
              class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14"
            >
              <img src="{{asset('images/svg/image_5.svg')}}" alt="linkedin" />
              <span>Linkedin</span>
            </a>
            @endif
            @if ($general[0]->youtube)
            <a
              href="{{$general[0]->youtube}}"
              target="_blank"
              class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14"
            >
              <img src="{{asset('images/svg/image_6.svg')}}" alt="youtube" />
              <span>YouTube</span>
            </a>
            @endif
            @if ($general[0]->tiktok)
            <a
              href="{{$general[0]->tiktok}}"
              target="_blank"
              class="flex justify-start items-center gap-2 text-white font-roboto font-normal text-text14"
            >
              <img src="{{asset('images/svg/image_tiktok.svg')}}" alt="tiktok" />
              <span>Tik Tok</span>
            </a>
            @endif
          </div>
        </div>

        <div class="flex flex-col gap-10" data-aos="fade-up"
        data-aos-offset="150">
          <div class="flex flex-col gap-5">
            <p class="font-roboto font-semibold text-text24 text-white leading-none">
                Empresa certificada por:
              </p>
              <div class="flex justify-start items-center">
                <img src="{{asset('images/img/image_1.png')}}" alt="Hodelpe">
              </div>
          </div>

          <div class="flex flex-col gap-5">
            <p class="font-roboto font-semibold text-text24 text-white leading-none">
                Empresa certificada por:
              </p>
              <div class="flex justify-start items-center">
                <img src="{{asset('images/img/image_2.png')}}" alt="Cámara nacional de comercio del perú">
              </div>
          </div>

          <div class="flex flex-col gap-5">
            <p class="font-roboto font-semibold text-text24 text-white leading-none">
                Política SIG
              </p>
              <div class="flex justify-start items-center">
                <img src="{{asset('images/img/image_3.png')}}" alt="Política SIG">
              </div>
          </div>

        </div>
      </div>
    </div>

    <div
      class="flex flex-col items-start gap-3 md:flex-row md:justify-between md:items-center w-11/12 mx-auto py-10 border-t border-white"
    >
      <a
        href="#"
        target="_blank"
        class="text-white font-roboto font-normal text-text14"
        >&copy; 2024 Mundo Web. Reservados todos los derechos</a
      >
      <div class="flex justify-start items-center gap-5">
        {{-- <a
          href="#"
          target="_blank"
          class="underline text-white font-roboto font-normal text-text14"
          >Política de privacidad</a
        >
        <a
          href="#"
          target="_blank"
          class="underline text-white font-roboto font-normal text-text14"
          >Terminos de servicio</a
        > --}}
      </div>
    </div>
  </footer>