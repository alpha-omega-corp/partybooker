<footer class="app-footer">

    <div class="footer-main">
        <x-logo class="footer-logo"/>

        <div class="footer-socials">
            <a href="{{$footerContacts->instagram}}">
                <img src="{{Vite::social('instagram')}}" alt="Instagram">
            </a>

            <a href="{{$footerContacts->facebook}}">
                <img src="{{Vite::social('facebook')}}" alt="Facebook">
            </a>

            <a href="{{$footerContacts->x}}">
                <img src="{{Vite::social('twitter')}}" alt="Twitter">
            </a>

            <a href="{{$footerContacts->linkedin}}">
                <img src="{{Vite::social('linkedin')}}" alt="Linkedin">
            </a>
        </div>
    </div>

    <div class="footer-contacts">
        <x-icon.text :text="$footerContacts->email" :icon="$emailIcon"/>
        <x-icon.text :text="$footerContacts->phone" :icon="$phoneIcon"/>
        <x-icon.text :text="$footerContacts->address" :icon="$pinIcon"/>
    </div>

</footer>
