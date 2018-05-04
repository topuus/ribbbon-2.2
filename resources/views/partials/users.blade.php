                                <div class="info">
                        <p class="name">{{ $value->full_name }}</p>
                        <p class="color-primary">{{ $value->email }}</p>
                        <p class="color-primary">{{ $value->title }}</p>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <div class="links">
                        <p v-if="user.link">
                            <a target="_blank" href="">
                                <span class="ion-ios-world-outline"></span> {{ $value->link }}
                            </a>
                        </p>
                        <p v-if="user.twitter">
                            <a target="_blank" href="https://twitter.com/{{ $value->twitter }}">
                                <span class="ion-social-twitter"></span> https://twitter.com/{{ $value->twitter }}
                            </a>
                        </p>
                        <p v-if="user.facebook">
                            <a target="_blank" href="https://www.facebook.com/people/{{ $value->facebook }}">
                                <span class="ion-social-facebook"></span> https://www.facebook.com/people/{{ $value->facebook}}
                            </a>
                        </p>
                        <p v-if="user.linkedin">
                            <a target="_blank" href="https://www.linkedin.com/in/{{ $value->linkedin }}">
                                <span class="ion-social-linkedin"></span> https://www.linkedin.com/in/{{ $value->linkedin }}
                            </a>
                        </p>
                    </div>