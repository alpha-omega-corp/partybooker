<x-modal.open
    :name="ModalName::APP_REGISTER"
    :type="ModalType::CREATE"
    :singleton="true"
    :background="true"
    :fit="true"
    :custom-color="AppColor::SECONDARY"
    :text="strtoupper(__('app.register'))"/>
