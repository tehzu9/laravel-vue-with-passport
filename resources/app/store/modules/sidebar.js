import Cookies from 'js-cookie'
import * as types from '../mutation-types'
import Axios from 'axios';

const {
    selected_sidebar_nav,
    sidebar_nav,
} = window.config

// state
export const state = {
    selected_sidebar_nav: Cookies.get('selected_sidebar_nav') || selected_sidebar_nav,
    sidebar_nav: sidebar_nav
}

// getters
export const getters = {
    selected_sidebar_nav: state => state.selected_sidebar_nav,
    sidebar_nav: state => state.sidebar_nav
}

// mutations
export const mutations = {
    [types.SET_SIDEBAR](state, {
        sidebar_nav
    }) {
        state.sidebar_nav = sidebar_nav;
    },
    [types.SET_SELECTED_SIDEBAR](state, {
        selected_sidebar_nav
    }) {
        state.selected_sidebar_nav = selected_sidebar_nav;
        Cookies.set('selected_sidebar_nav', selected_sidebar_nav, {
            expires: 365
        });
    },
    [types.FETCH_SIDEBAR_FAILURE](state) {
        state.sidebar_nav = null
        Cookies.remove('selected_sidebar_nav');
    }
}

// actions
export const actions = {
    set_sidebar({
        commit
    }, payload) {
        try {
            const {
                data
            } = await Axios.get('/api/sidebar');
            commit(types.SET_SIDEBAR, {
                sidebar_nav: data
            });
        } catch (e) {
            commit(types.FETCH_SIDEBAR_FAILURE);
        }
    };
}
