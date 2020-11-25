 <!-- Modal: modalPoll -->
<div class="modal fade right" id="modalPoll-1" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
            <div class="modal-dialog modal-full-height modal-right modal-notify modal-info"
                role="document">
                <div class="modal-content">
                    <!--Header-->
                    <div class="modal-header">
                        <p class="heading lead">Feedback request
                        </p>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white-text">×</span>
                        </button>
                    </div>

                    <!--Body-->
                    <div class="modal-body">
                        <div class="text-center">
                            <i class="far fa-file-alt fa-4x mb-3 animated rotateIn"></i>
                            <h3>
                                <strong>ALGORITHME ET PSEUDO-CODE</strong>
                            </h3>
                        </div>

                        <hr>

                        <!-- Radio -->
                        <p class="text-center">
                            <strong>Your rating</strong>
                        </p>
                        <div class="form-check mb-4">
                            <input class="form-check-input" name="group1" type="radio"
                                id="radio-179" value="option1" checked>
                            <label class="form-check-label" for="radio-179">Very good</label>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" name="group1" type="radio"
                                id="radio-279" value="option2">
                            <label class="form-check-label" for="radio-279">Good</label>
                        </div>

                        <div class="form-check mb-4">
                            <input class="form-check-input" name="group1" type="radio"
                                id="radio-379" value="option3">
                            <label class="form-check-label" for="radio-379">Mediocre</label>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" name="group1" type="radio"
                                id="radio-479" value="option4">
                            <label class="form-check-label" for="radio-479">Bad</label>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" name="group1" type="radio"
                                id="radio-579" value="option5">
                            <label class="form-check-label" for="radio-579">Very bad</label>
                        </div>
                        <!-- Radio -->

                        <p class="text-center">
                            <strong>What could we improve?</strong>
                        </p>
                        <!--Basic textarea-->
                        <div class="md-form">
                            <textarea type="text" id="form79textarea"
                                class="md-textarea form-control" rows="3"></textarea>
                            <label for="form79textarea">Your message</label>
                        </div>

                    </div>

                    <!--Footer-->
                    <div class="modal-footer justify-content-center">
                        <a type="button" class="btn btn-primary waves-effect waves-light">Send
                            <i class="fa fa-paper-plane ml-1"></i>
                        </a>
                        <a type="button" class="btn btn-outline-dark waves-effect"
                            data-dismiss="modal">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal: modalPoll -->
        <div>
            <button type="button" class="btn btn-warning" data-toggle="modal"
                data-target="#modalPoll-1">
                Vos Feedback m'intéresse..</button>
        </div>